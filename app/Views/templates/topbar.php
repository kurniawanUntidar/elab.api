<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"><i class="fa fa-bars"></i></button>

    <!-- <a class="navbar-brand" href="<?= base_url();?>">
      <img src="<?= base_url();?>img/Logo-elab.svg" alt="Elab" height="60">
    </a> -->

<!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="<?= base_url();?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>/">Alat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>/">Bahan</a>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
  
        <?php if(user()){ ?>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline"><?= user()->username;?></span>
                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
            </a>
        <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
              <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
              </div>
          </li>
          <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url();?>login">Login</a>
          </li>
          <?php } ?>

    </ul>

</nav>


