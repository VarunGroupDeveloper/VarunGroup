<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Dashboard</h2>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- Welcome Wrap -->
        <div class="welcome-wrap mb-4">
            <div class="d-flex align-items-center justify-content-between flex-wrap">
                <div class="mb-3">
                    <h2 class="mb-1 text-white">Welcome Back, <?= $this->session->userdata('admin_name'); ?></h2>
                    <!-- <p class="text-light">14 New Companies Subscribed Today !!!</p> -->
                </div>
            </div>
            <div class="welcome-bg">
                <img src="<?= base_url('assets/img/bg/welcome-bg-02.svg'); ?>" alt="img" class="welcome-bg-01">
                <img src="<?= base_url('assets/img/bg/welcome-bg-03.svg'); ?>" alt="img" class="welcome-bg-02">
                <img src="<?= base_url('assets/img/bg/welcome-bg-01.svg'); ?>" alt="img" class="welcome-bg-03">
            </div>
        </div>  
        <!-- /Welcome Wrap -->

        <div class="row">
            <!-- Total Products -->
            <div class="col-xl-3 col-sm-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="avatar avatar-md bg-dark mb-3">
                                <i class="ti ti-building fs-16"></i>
                            </span>                          
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h2 class="mb-1"><?= number_format($counts['banners']); ?></h2>
                                <p class="fs-15">Total Banners</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Total Products -->

            <!-- Total Sliders -->
            <div class="col-xl-3 col-sm-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="avatar avatar-md bg-dark mb-3">
                                <i class="ti ti-carousel-vertical fs-16"></i>
                            </span>
                     
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h2 class="mb-1"><?= number_format($counts['categories']); ?></h2>
                                <p class="fs-15">Total Categories</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Total Sliders -->

            <!-- Total Outlets -->
            <div class="col-xl-3 col-sm-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="avatar avatar-md bg-dark mb-3">
                                <i class="ti ti-chalkboard-off fs-16"></i>
                            </span>
                          
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h2 class="mb-1"><?= number_format($counts['products']); ?></h2>
                                <p class="fs-15">Total Products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Total Outlets -->

            <!-- Total Locations -->
            <div class="col-xl-3 col-sm-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="avatar avatar-md bg-dark mb-3">
                                <i class="ti ti-chalkboard-off fs-16"></i>
                            </span>
                          
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h2 class="mb-1"><?= number_format($counts['variants']); ?></h2>
                                <p class="fs-15">Total Product Variant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Total Locations -->

            <!-- Total Vehicles -->
            <div class="col-xl-3 col-sm-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="avatar avatar-md bg-dark mb-3">
                                <i class="ti ti-businessplan fs-16"></i>
                            </span>
                      
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h2 class="mb-1"><?= number_format($counts['blogs']); ?></h2>
                                <p class="fs-15">Total Blogs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Total Vehicles -->

            <!-- Total Blogs -->
            <div class="col-xl-3 col-sm-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="avatar avatar-md bg-dark mb-3">
                                <i class="ti ti-businessplan fs-16"></i>
                            </span>
                         
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h2 class="mb-1"><?= number_format($counts['outlets']); ?></h2>
                                <p class="fs-15">Total Outlets</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Total Blogs -->

        </div>
    </div>
</div>
<!-- /Page Wrapper -->
