<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="apple-touch-icon" sizes="76x76" href="assets_admin/img/apple-icon.png"> -->
  <!-- <link rel="icon" type="image/png" href="assets_admin/img/favicon.png"> -->
  <title>
    Paybills | dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/soft-ui-dashboard/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo assets('assets_admin/css/soft-ui-dashboard.css?v=1.1.0'); ?>" rel="stylesheet" />
  <link href="<?php echo assets('assets_admin/css/style.css'); ?>" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" <?php echo url(''); ?> ">
        <img src="<?php echo assets('assets_admin/img/logo-ct-dark.png'); ?>" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Paybills</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active" href="<?php echo url('user/dashboard'); ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-home fa-md text-dark py-0 my-0"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item mt-3">
        <hr class="horizontal dark mt-0">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="<?php echo url('user/wallet'); ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-bank text-dark my-0"></i>  
            </div>
            <span class="nav-link-text ms-1">Deposit</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="<?php echo url('user/plan'); ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-table-list text-dark my-0"></i>  
            </div>
            <span class="nav-link-text ms-1">investment plan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="<?php echo url('user/withdraw'); ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-wallet text-dark"></i>
            </div>
            <span class="nav-link-text ms-1">Withdrawal</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="<?php echo url('user/transactions'); ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-exchange text-dark my-0"></i>  
            </div>
            <span class="nav-link-text ms-1">Transaction History</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="<?php echo url('user/profile'); ?>">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-users text-dark my-0"></i>  
            </div>
            <span class="nav-link-text ms-1">Referrals</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-comments text-dark my-0"></i>  
            </div>
            <span class="nav-link-text ms-1">Support ticket</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>