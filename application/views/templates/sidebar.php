<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Pengaduan Masyarakat</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Dashboard</li>
                <li class="nav-item menu-open">
                    <a href="<?= base_url('admin') ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Menu</li>
                <li class="nav-item menu-open">
                    <a href="<?= base_url('admin/data_pengaduan') ?>" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Data Pengaduan
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?= base_url('admin/data_tanggapan') ?>" class="nav-link">
                        <i class="nav-icon fas fa-check"></i>
                        <p>
                            Data Tanggapan
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?= base_url('admin/petugas') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Data Petugas
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?= base_url('admin/data_masyarakat') ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Masyarakat
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?= base_url('admin/edit_profile') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>
                            Edit Profile
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="<?= base_url('admin/logout') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>