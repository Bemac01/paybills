
<?php
pushScript("headerTitle");
echo $title;
endPushScript();
section("contentDashboard");
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Paybills</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Deposit</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Deposit</h6>
        </nav>
        <?php chi_include("pages/layout/top_nav"); ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4 h-100">
      <div class="row justify-content-center ">
        <div class="col-10">
          <div class="card">
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12 p-4">
                  <h5 class="m-4">Deposit</h5>
                  <form action="" method="post" id="depositForm">
                    <div class="row px-5">
                      <div class="col-md-12 mb-3">
                        <label for="token" class="form-label">Payment Gateway</label>
                        <select name="token" id="token" class="form-select" required>
                          <?php foreach ($wallet as $row) : ?>
                            <option value="<?php echo ($row->id-1); ?>"><?php echo $row->token_id; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter Amount" required>
                      </div>
                      <div class="d-grid col-12 mx-auto">
                        <button class="btn btn-primary" type="submit" data-bs-toggle="modal" href="#exampleModalToggle" role="button">proceed</button>   
                      </div>
                    </div>
                  </form>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="text-center m-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis molestias fuga placeat quasi reiciendis eveniet?</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
             
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">
                                &times;
                            </span>
                </button>
            
            <div class="modal-body">
                <div id="display"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
            </div>
            </div>
        </div>
    </div>
  </main>
  <?php chi_include("pages/layout/fixed_plugin"); ?>
  
  
<?php
endsection();
pushScript("scripts");
?>
<script>
  $(document).ready(function () {
    $('#depositForm').submit(function (e) { 
      e.preventDefault();
      let form = $(this);
      //ajax
      $.ajax({
        type: "POST",
        url: "<?php echo url('/address') ?>",
        data: form.serialize(),
        dataType: "json",
        success: function (response) {
          if (response.status == 200) {
            //show modal
            $('#exampleModalToggle').modal('show');
            $('#display').html(response);
            
          } else {
            //show error message
            $('#exampleModalToggle').modal('show');
            $('#exampleModalToggle .modal-body').html(response.message);
          }
        }
      });
      
    });
    
  });
</script>
<?php
endPushScript();
extend('pages/layout/app', 'contentDashboard');