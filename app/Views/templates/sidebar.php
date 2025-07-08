        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url();?>">
                <img src="<?= base_url();?>img/Logo-elab.svg" alt="Elab" height="60">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

           <?php foreach ($menu as $menuItem): ?>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="<?= $menuItem['logo'] ?>"></i>
                    <span><?= $menuItem['menu'] ?></span></a>
            </li>
             <hr class="sidebar-divider">
            <?php endforeach; ?>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - My Profile -->
            <li class="nav-item">
                <a class="nav-link" href="My Profile.html">
                    <i class="fas fa-fw fa-user-plus"></i>
                    <span>My Profile</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <?php if(user()){ 
                $link = base_url()."logout";
                $dataTogle = "modal";   
                $dataTarget = "#logoutModal";
                $linkText = "Logout";
                $icon = "fas fa-sign-out-alt";
            } else {
                $link = base_url()."login";
                $dataTogle = "button"; 
                $dataTarget = "";
                $linkText = "Login";
                $icon = "fas fa-sign-in-alt";
            } ?>

            <li class="nav-item">
                <a class="nav-link btn bg-gradient-secondary btn-block"  type="button"
                        href="<?= $link ?>" 
                        data-toggle=<?=$dataTogle?> 
                        data-target=<?=$dataTarget?>>
                    <i class="<?= $icon ?>"></i>
                    <span><?= $linkText ?></span>
        </a>
            </li>

            
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>