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
     <div class="container"> 
     <!-- Card group -->
  <div class="row row-cols-1 row-cols-md-2 g-4">
     <div class="col">
       <div class="card">
         <img src="../assets/images/placeholder/placeholder-4by3.svg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         </div>
       </div>
     </div>
     <div class="col">
       <div class="card">
         <img src="../assets/images/placeholder/placeholder-4by3.svg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         </div>
       </div>
     </div>
     <div class="col">
       <div class="card">
         <img src="../assets/images/placeholder/placeholder-4by3.svg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
         </div>
       </div>
     </div>
     <div class="col">
       <div class="card">
         <img src="../assets/images/placeholder/placeholder-4by3.svg" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Card title</h5>
           <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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