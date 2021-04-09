<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">



        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-seedling"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Plasma Nutfah</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/landing'); ?>">
                    <i class="fas fa-fw fa-seedling"></i>
                    <span>Menu Utama</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Profile
            </div>

            <!-- Nav - Profil Pengelolaan -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/profile'); ?>">
                    <i class="fas fa-users"></i>
                    <span>Profil Pengelolaan</span></a>
            </li>

            <!-- Nav - Status  -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/status_data'); ?>">
                    <i class="fas fa-table"></i>
                    <span>Status Komputerisasi Data</span></a>
            </li>

            <!-- Nav - add user -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/registration'); ?>">
                    <i class="fas fa-user"></i>
                    <span>Tambah Pengguna</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Databases
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-database"></i>
                    <span>Database Plasma Nutfah</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 2) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/abaka'); ?>">Abaka</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 3) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/bunga_matahari'); ?>">Bunga Matahari</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 4) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/jarak_pagar'); ?>">Jarak Pagar</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 5) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/kapas'); ?>">Kapas</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 6) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/kapuk'); ?>">Kapuk</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 7) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/kemiri'); ?>">Kemiri</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 8) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/kenaf'); ?>">Kenaf</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 9) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/rami'); ?>">Rami</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 10) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/tebu'); ?>">Tebu</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 11) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/tembakau'); ?>">Tembakau</a>
                        <?php
                        }
                        ?>
                        <?php
                        $role = $this->session->userdata("role_id");
                        if ($role == 1 || $role == 12) {
                        ?>
                            <a class="collapse-item" href="<?= base_url('tanaman/wijen'); ?>">Wijen</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Daftar Deskriptor</span></a>
            </li>
            <!-- Nav Item daftar pengguna -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/daftar_user'); ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Daftar Pengguna</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->