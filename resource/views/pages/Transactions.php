
<?php
section("contentDashboard");
?>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Paybills</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Transactions</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Transactions</h6>
        </nav>
        <?php chi_include("pages/layout/top_nav"); ?>

    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
          <div class="card shadow h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Fund Account</h6>
            </div>
            <div class="card-body pb-0 p-3">
              <!-- forms goes here -->
               <form action="" method="get">
                    <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="from-group">
                            <label for="PaymentMethod">Select Token</label>
                            <select name="payment_method" id="paymentMethod" class="form-control form-control-lg" aria-label="Payment Method" aria-describedby="payment_method-addon">
                                <option value="">Select Token</option>
                                <option value="bank">BTC</option>
                                <option value="card">USDT</option>
                                <option value="card">XRP</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="amount">Amonut</label>
                            <input name="amount" id="amount" type="amount" class="form-control form-control-lg" placeholder="Enter amount" aria-label="Email" aria-describedby="amount-addon">
                        </div>
                    </div>
               </form>
            </div>
            <div class="card-footer pt-0 p-3 d-flex align-items-center mt-4">
              <div class="w-40 text-left">
                <a class="btn btn-success mb-0 text-end" href="javascript:;">Fund Account</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
          <div class="card shadow h-100">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">proof of Payment</h6>
            </div>
            <div class="card-body pb-0 p-3">
            <form action="" method="get">
                    <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Upload Receipt</label>
                            <i class="form-control fas fa-plus" type="file" id="formFileMultiple" multiple ></i>
                        </div>
                    </div>
                    <div class="mb-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="amount">Amonut</label>
                            <input name="amount" id="amount" type="amount" class="form-control form-control-lg" placeholder="Enter amount" aria-label="Email" aria-describedby="amount-addon">
                        </div>
                    </div>

                    <div class="w-40 text-end">
                        <a class="btn btn-dark mb-0 text-end" href="javascript:;">Submit proof</a>
                    </div>
               </form>
            </div>
            <div class="card-footer pt-0 p-3 d-flex align-items-center">
              <div class="w-60">
                <p class="text-sm">
                  More than <b>1,500,000</b> developers used Creative Tim's products and over <b>700,000</b> projects were created.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php chi_include("pages/layout/fixed_plugin"); ?>
  
<?php
endsection();
extend('pages/layout/app', 'contentDashboard');