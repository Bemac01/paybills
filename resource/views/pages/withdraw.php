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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Withdrawal</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Withdrawal</h6>
        </nav>
        <?php chi_include("pages/layout/top_nav"); ?>
    <!-- End Navbar -->

    <!-- content starts here -->
    <div class="container ">
          <h2 class="text-center mb-5">Choose Your Perfect Plan</h2>
          <div class="row justify-content-center">
              <!-- Basic Plan -->
              <div class="col-lg-3">
                  <div class="card pricing-card h-100">
                      <div class="card-header pricing-header basic-header p-4">
                          <h3 class="card-title text-center mb-0">Basic</h3>
                      </div>
                      <div class="card-body p-4">
                          <h2 class="card-title text-center mb-4">$19<small class="text-muted">/mo</small></h2>
                          <ul class="feature-list text-center mb-4">
                              <li>5 Projects</li>
                              <li>20 GB Storage</li>
                              <li>Basic Support</li>
                              <li>1 User</li>
                          </ul>
                          <div class="text-center">
                              <a href="#" class="btn btn-outline-primary btn-custom">Choose Plan</a>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Pro Plan -->
              <div class="col-lg-3">
                  <div class="card pricing-card h-100">
                      <div class="card-header pricing-header pro-header p-4">
                          <h3 class="card-title text-center mb-0">Pro</h3>
                      </div>
                      <div class="card-body p-4">
                          <h2 class="card-title text-center mb-4">$49<small class="text-muted">/mo</small></h2>
                          <ul class="feature-list text-center mb-4">
                              <li>15 Projects</li>
                              <li>50 GB Storage</li>
                              <li>Priority Support</li>
                              <li>5 Users</li>
                          </ul>
                          <div class="text-center">
                              <a href="#" class="btn btn-primary btn-custom">Choose Plan</a>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Enterprise Plan -->
              <div class="col-lg-3">
                  <div class="card pricing-card h-100">
                      <div class="card-header pricing-header enterprise-header p-4">
                          <h3 class="card-title text-center mb-0">Enterprise</h3>
                      </div>
                      <div class="card-body p-4">
                          <h2 class="card-title text-center mb-4">$99<small class="text-muted">/mo</small></h2>
                          <ul class="feature-list text-center mb-4">
                              <li>Unlimited Projects</li>
                              <li>500 GB Storage</li>
                              <li>24/7 Support</li>
                              <li>Unlimited Users</li>
                          </ul>
                          <div class="text-center">
                              <a href="#" class="btn btn-success btn-custom">Choose Plan</a>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- golden Plan -->
              <div class="col-lg-3">
                  <div class="card pricing-card h-100">
                      <div class="card-header pricing-header enterprise-header p-4">
                          <h3 class="card-title text-center mb-0">Enterprise</h3>
                      </div>
                      <div class="card-body p-4">
                          <h2 class="card-title text-center mb-4">$99<small class="text-muted">/mo</small></h2>
                          <ul class="feature-list text-center mb-4">
                              <li>Unlimited Projects</li>
                              <li>500 GB Storage</li>
                              <li>24/7 Support</li>
                              <li>Unlimited Users</li>
                          </ul>
                          <div class="text-center">
                              <a href="#" class="btn btn-success btn-custom">Choose Plan</a>
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
      }

      .pricing-header {
          border-radius: 15px 15px 0 0;
          color: white;
      }

      .basic-header {
          background: linear-gradient(45deg, #3494E6, #EC6EAD);
      }

      .pro-header {
          background: linear-gradient(45deg, #614385, #516395);
      }

      .enterprise-header {
          background: linear-gradient(45deg, #1D976C, #93F9B9);
      }

      .btn-custom {
          border-radius: 50px;
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