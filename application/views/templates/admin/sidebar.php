<?php
$current_url = $_SERVER['REQUEST_URI']; 
?>
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Logo -->
    <div class="sidebar-logo">
        <a href="<?= base_url('admin/dashboard'); ?>" class="logo logo-normal">
            <img src="<?= base_url('assets/images/logo/logo.png'); ?>" alt="Logo">
        </a>
    </div>
    <!-- /Logo -->

    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>MAIN MENU</span></li>
                <li>
                    <ul>
                        <li>
                            <a href="<?= base_url('admin/dashboard'); ?>" class="<?= (strpos($current_url, 'dashboard') !== false) ? 'active' : ''; ?>">
                                <i class="ti ti-smart-home"></i> <span>Dashboard</span>
                            </a>
                        </li>

                        <?php if ($this->session->userdata('admin_role') === 'superadmin') : ?>
                        <li>
                            <a href="<?= base_url('admin/users'); ?>" class="<?= (strpos($current_url, 'users') !== false) ? 'active' : ''; ?>">
                                <i class="ti ti-user"></i> <span>Manage Users</span>
                            </a>
                        </li>
                        <?php endif; ?>
                       
                        <li>
                            <a href="<?= base_url('admin/banners'); ?>" class="<?= (strpos($current_url, 'banners') !== false) ? 'active' : ''; ?>">
                                <i class="ti ti-layout"></i> <span>Banners</span>
                            </a>
                        </li>
                   
                      
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
