<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0"><?php echo "Welcome @User Paybilles"?></h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidenav Type -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  " href="<?php echo url('user/profile'); ?>">
              <div class="text-lead">
                  <i class="fas fa-user text-dark my-0"></i>  
               <span class="ms-1">profile settings</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="<?php echo url('#'); ?>">
              <div class="text-lead">
                  <i class="fas fa-cog text-dark my-0"></i>  
               <span class="ms-1">Change Password</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="<?php echo url('#'); ?>">
              <div class="text-lead">
                  <i class="fas fa-comment text-dark my-0"></i>  
               <span class="ms-1">Support ticket</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="<?php echo url('logout'); ?>">
              <div class="text-lead">
                  <i class="fas fa-power-off text-dark my-0"></i>  
              <span class="ms-1">sign out</span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>