        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url();?>">
                <img src="<?= base_url();?>img/Logo-elab.svg" alt="Elab" height="60">
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider">

         
        <?php if (logged_in()): ?> 
        <?php //if (user()): ?>
        <?php
        // Dapatkan data menu dari controller (melalui view data)
        // Pastikan Anda meneruskan variabel $sidebarMenus dari controller ke view layout utama.
        // Contoh: return view('layout/main', ['sidebarMenus' => $this->sidebarMenus]);
        $menus = $sidebarMenus ?? []; // Jika tidak ada, default ke array kosong
      //  var_dump($menus);
        ?>

        <?php

        foreach ($menus as $mainMenu): ?>
            <?php if (empty($mainMenu['sub_menus'])): ?>
                <li class="nav-item <?= url_is($mainMenu['url']) ? 'active' : '' ?>">
                    <a class="nav-link collapsed" href="<?= base_url($mainMenu['url']) ?>">
                        <i class="<?= esc($mainMenu['icon']) ?>"></i>
                        <span><?= esc($mainMenu['title']) ?></span>
                    </a>
                </li>
            <?php else: ?>
                <li class="nav-item <?= url_is($mainMenu['url']) ? 'active' : '' ?>">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse<?= esc($mainMenu['id']) ?>"
                        aria-expanded="true" aria-controls="collapse<?= esc($mainMenu['id']) ?>">
                        <i class="<?= esc($mainMenu['icon']) ?>"></i>
                        <span><?= esc($mainMenu['title']) ?></span>
                    </a>
                    <div id="collapse<?= esc($mainMenu['id']) ?>" class="collapse" aria-labelledby="heading<?= esc($mainMenu['id']) ?>" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header"><?= esc($mainMenu['title']) ?>:</h6>
                            <?php foreach ($mainMenu['sub_menus'] as $subMenu): ?>
                                <a class="collapse-item" href="<?= base_url($subMenu['url']) ?>">
                                    <?= esc($subMenu['title']) ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>
            <?php endif; ?>
            <hr class="sidebar-divider">
        <?php endforeach; ?>

        <hr class="sidebar-divider d-none d-md-block">
            <!-- Divider -->

            <?php if(user()):
                $link = base_url()."logout";
                $dataTogle = "modal";   
                $dataTarget = "#logoutModal";
                $linkText = "Logout";
                $icon = "fas fa-sign-out-alt";
            else:
                $link = base_url()."login";
                $dataTogle = "button"; 
                $dataTarget = "";
                $linkText = "Login";
                $icon = "fas fa-sign-in-alt";
            endif; ?>

            <li class="nav-item active">
                <a class="nav-link btn bg-gradient-secondary btn-block "  type="button"
                        href="<?= $link ?>" 
                        data-toggle=<?=$dataTogle?> 
                        data-target=<?=$dataTarget?>>
                    <i class="<?= $icon ?>"></i>
                    <span><?= $linkText ?></span></a>
            </li>

            
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          <?php endif; ?>

        </ul>