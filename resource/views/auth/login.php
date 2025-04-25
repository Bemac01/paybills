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
                <h4 class="font-weight-bolder">Sign In</h4>
                <p class="mb-0">Enter your email and password to sign in</p>
              </div>
              <div class="card-body">
                <form role="form" action="" method="post" id="loginUser">
                  <div class="mb-3">
                    <input name="email" type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg bg-gradient-success btn-lg w-100 mt-4 mb-0">Sign in</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Don't have an account?
                  <a href="<?php echo esc_url('register')?>" class="text-success text-gradient font-weight-bold">Sign up</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-success h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="assets/img/shapes/pattern-lines.svg" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="assets/img/illustrations/chat.png">
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
  pushScript('scripts');
  ?>
  <script>
    $(document).ready(function() {

          //login submit
          $("#loginUser").submit(function(e) {
              e.preventDefault();
              let form = $(this);
              //ajax
              $.ajax({
                  type: "POST",
                  url: "<?php echo url('/login-user') ?>",
                  data: form.serialize(),
                  dataType: "json",
                  beforeSend: () => {
                      //show animation
                      //block form
                      form.block({
                          message: '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>',
                          overlayCSS: {
                              backgroundColor: '#fff',
                              opacity: 0.8,
                              cursor: 'wait'
                          },
                          css: {
                              border: 0,
                              padding: 0,
                              backgroundColor: 'none'
                          }
                      });
                  },
                  success: function(response) {
                      //unblock form
                      form.unblock();
                      //check if response code is 200
                      if (response.code == 200) {
                          //Swal
                          Swal.fire({
                              icon: 'success',
                              title: 'Success',
                              text: response.message,
                              showConfirmButton: true,
                              //confirm button text
                              confirmButtonText: 'Goto Dashboard',
                          }).then((result) => {
                              //check if result is true
                              if (result.isConfirmed) {
                                  //redirect to dashboard
                                  window.location.href = response.redirect;
                              } else {
                                  //redirect to dashboard
                                  window.location.href = "<?php echo url(''); ?>";
                              }
                          });
                      } else {
                          //show error
                          Swal.fire({
                              icon: 'error',
                              title: 'Oops...',
                              text: response.message,
                          });
                      }
                  }
              });
          });

  </script>
  <?php
  endPushScript();
  extend("auth/layout/app","contentAuth");