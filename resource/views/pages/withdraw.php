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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Withdrawal</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Withdrawal</h6>
        </nav>
        <?php chi_include("pages/layout/top_nav"); ?>
    <!-- End Navbar -->

    <!-- content starts here -->
    <!-- Button trigger modal -->
       <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Enter Amonut</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="lead" id="display"></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
            </div>
            </div>
        </div>
        </div>
        
        <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>
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