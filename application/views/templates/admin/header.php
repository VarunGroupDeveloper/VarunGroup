<!-- Header -->
<div class="header">
    <div class="main-header">

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <div class="header-user">
            <div class="nav user-menu nav-list">

                <div class="me-auto d-flex align-items-center" id="header-search">
                    <a id="toggle_btn" href="javascript:void(0);" class="btn btn-menubar me-1">
                        <i class="ti ti-arrow-bar-to-left"></i>
                    </a>
                    <!-- Search -->
                    <div class="input-group input-group-flat d-inline-flex me-1">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <!-- /Search -->
                </div>

                <div class="d-flex align-items-center">
                    <div class="dropdown profile-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
                            <span class="avatar avatar-sm online">
                                <img src="<?= base_url('assets/img/profiles/avatar-12.jpg'); ?>" alt="Profile Image" class="img-fluid rounded-circle">
                            </span>
                        </a>
                        <div class="dropdown-menu shadow-none">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg me-2 avatar-rounded">
                                            <img src="<?= base_url('assets/img/profiles/avatar-12.jpg'); ?>" alt="Profile Image">
                                        </span>
                                        <div>
                                            <h5 class="mb-0"><?= $this->session->userdata('admin_name'); ?></h5>
                                            <p class="fs-12 fw-medium mb-0"><?= $this->session->userdata('admin_email'); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer py-1">
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="<?= base_url('admin/logout'); ?>">
                                        <i class="ti ti-login me-2"></i>Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="<?= base_url('admin/profile'); ?>">My Profile</a>
                <a class="dropdown-item" href="<?= base_url('admin/settings'); ?>">Settings</a>
                <a class="dropdown-item" href="<?= base_url('admin/logout'); ?>">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->

    </div>
</div>
<!-- /Header -->
