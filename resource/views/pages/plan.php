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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Portflios</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Portflios</h6>
        </nav>
        <?php chi_include("pages/layout/top_nav"); ?>
    <!-- End Navbar -->

    <!-- content starts here -->
    <div class="container ">
          <h2 class="text-center mb-5">Choose Your Perfect Plan</h2>
          <div class="row justify-content-center">
              <!-- Basic Plan -->
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                  <div class="card pricing-card h-100">
                      <div class="card-header pricing-header bg-gradient-info p-4">
                          <h3 class="card-title text-center mb-0">Basic</h3>
                      </div>
                      <div class="card-body p-4">
                          <h4 class="card-title text-center mb-4">$ 100<small class="text-muted"> - </small>$ 4999</h4>
                          <ul class="feature-list text-center mb-4">
                              <li>Return 3%</li>
                              <li>Everyday</li>
                              <li>For 14 days</li>
                              <li>Total 42%</li>
                          </ul>
                          <div class="text-center">
                              <a href="#" class="btn btn-outline-primary btn-custom">Invest Now</a>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Pro Plan -->
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                  <div class="card pricing-card h-100">
                      <div class="card-header pricing-header bg-gradient-info p-4">
                          <h3 class="card-title text-center mb-0">Silver</h3>
                      </div>
                      <div class="card-body p-4">
                          <h4 class="card-title text-center mb-4">$ 5000<small class="text-muted"> - </small>$ 15999</h4>
                          <ul class="feature-list text-center mb-4">
                              <li>Return 5%</li>
                              <li>Everyday</li>
                              <li>For 14 days</li>
                              <li>Total 70%</li>
                          </ul>
                          <div class="text-center">
                              <a href="#" class="btn btn-primary btn-custom">Invest Now</a>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Enterprise Plan -->
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                  <div class="card pricing-card h-100">
                      <div class="card-header pricing-header bg-gradient-info p-4">
                          <h3 class="card-title text-center mb-0">Diamond</h3>
                      </div>
                      <div class="card-body p-4">
                          <h4 class="card-title text-center mb-4">$ 16999<small class="text-muted"> - </small>$ 50999</h4>
                          <ul class="feature-list text-center mb-4">
                              <li>Return 25%</li>
                              <li>Everyday</li>
                              <li>For 14 days</li>
                              <li>Total 350%</li>
                          </ul>
                          <div class="text-center">
                              <a href="#" class="btn btn-primary btn-custom">Invest Now</a>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- golden Plan -->
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                  <div class="card pricing-card h-100">
                      <div class="card-header pricing-header bg-gradient-info p-4">
                          <h3 class="card-title text-center mb-0">Gold</h3>
                      </div>
                      <div class="card-body p-4">
                          <h4 class="card-title text-center mb-4">$ 55999<small class="text-muted"> - </small>$ 100000</h4>
                          <ul class="feature-list text-center mb-4">
                              <li>Return 30%</li>
                              <li>Everyday</li>
                              <li>Fore 14 days</li>
                              <li>Total 400%</li>
                          </ul>
                          <div class="text-center">
                              <a href="#" class="btn btn-primary btn-custom">Invest Now</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
   </main>
  
   <style>
          /* styling for pricing page */

      .pricing-card {
          border: none;
          border-radius: 15px;
          transition: all 0.3s ease;
      }

      .pricing-card:hover {
          transform: translateY(-10px);
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
          background: #000;
          color: #fff
      }

      .pricing-header {
          color: white;
      }

      .basic-header {
          background: linear-gradient(45deg,rgb(52, 230, 120), #EC6EAD);
      }

      .pro-header {
          background: linear-gradient(45deg,rgb(67, 133, 78),rgb(117, 149, 81));
      }

      .enterprise-header {
          background: linear-gradient(45deg, #1D976C, #93F9B9);
      }

      .btn-custom {
          border-radius: 20px;
          padding: 10px 30px;
          font-weight: bold;
          text-transform: uppercase;
          letter-spacing: 1px;
      }

      .feature-list {
          list-style-type: none;
          padding-left: 0;
      }

      .feature-list li {
          padding: 8px 0;
          border-bottom: 1px solid #e9ecef;
      }

      .feature-list li:last-child {
          border-bottom: none;
      }

   </style>
  <?php chi_include("pages/layout/fixed_plugin"); ?>
  
<?php
endsection();
extend('pages/layout/app', 'contentDashboard');