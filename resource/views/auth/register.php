<?php
section("contentAuth");
?>
<section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Sign Up</h4>
                <p class="mb-0">Sign Up to get started</p>
              </div>
              <div class="card-body">
                 <form id="registerForm" role="form" action="" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="first_name-addon">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="last_name-addon">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="from-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="phone-addon">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="password" id="password" type="password" class="form-control form-control-lg" placeholder="Password"
                            aria-label="Password" aria-describedby="password-addon">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-success btn-lg w-100 mt-4 mb-0">Sign up</button>
                    </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  I have an account?
                  <a href="<?php echo esc_url('login')?>" class="text-success text-gradient font-weight-bold">Sign in</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-success h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <!-- <img class="max-width-500 w-100 position-relative z-index-2" src="assets/img/illustrations/chat.png"> -->
                <img class="max-width-50 w-100 position-relative z-index-2" src="assets/img/illustrations/sign-up.png" alt="image">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder">"Attention is the new currency"</h4>
              <p class="text-white">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
endsection();
pushScript("scripts");
?>
<script>
    $(document).ready(function () {
      
      $('#registerForm').submit(function (e) { 
          e.preventDefault();
          let formData = $(this);  

          //ajax call to register user
          $.ajax({
              type: "POST",
              url: "<?php echo url('/register-user')?>",
              data: formData.serialize(),
              dataType: "json",
              beforeSend: function () {
                  // Show loading spinner or message
                    formData.block({
                        message: '<div class="spinner-border text-success text-gradient" role="status"><span class="visually-hidden">Loading...</span></div>',
                        overlayCSS: {
                            background: '#fff',
                            opacity: 0.8,
                            cursor: 'wait'
                        },
                        css: {
                            border: 0,
                            padding: 0,
                            backgroundColor: 'none'
                        },
                        // {
                        //   fadeOut: 5000,
                        // }
                    });    
              },
              success: function (response) {
                //unblock the form
                  formData.unblock();
                  //response if all works well
                  if(response.code == 200)
                  {
                    //clear the form
                    formData.trigger("reset");
                      //show success message
                      Swal.fire({
                          title: 'Success',
                          text: response.message,
                          icon: 'success',
                          confirmButtonText: 'Login'
                      }).then((result) => {
                          if (result.isConfirmed) {
                              window.location.href = "<?php echo url('/login')?>";
                          }
                      });
                  }
                  else if(response.code == 400)
                  {
                      //show error message
                      Swal.fire({
                          title: 'Error',
                          text: response.message,
                          icon: 'info',
                          confirmButtonText: 'Try Again'
                      });
                  }
                  else if(response.code == 500)
                  {
                      //show error message
                      Swal.fire({
                          title: 'Error',
                          text: response.message,
                          icon: 'error',
                          confirmButtonText: 'OK'
                      });
                  }
              }
          });
      });
  });   
</script>
<?php
endPushScript();
extend("auth/layout/app","contentAuth");