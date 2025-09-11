    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="container-fuild">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-lg-flex align-items-center justify-content-center d-none flex-wrap vh-100 bg-primary-transparent">
                            <div>
                                <img src="<?= base_url('assets/images/authentication-bg.svg'); ?>" alt="Authentication Image">
                            </div>
                        </div>
                    </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="d-flex align-items-center justify-content-center min-vh-100 py-4">
                      <div class="w-100" style="max-width: 520px;">
                        <form action="<?= base_url('admin/login_authenticate'); ?>" method="post">
                          <div class="text-center mb-4">
                            <img src="<?= base_url('assets/images/logo/logo.png'); ?>" class="img-fluid" alt="Logo" >
                          </div>

                          <div class="text-center mb-5">
                            <h2 class="mb-1">Sign In</h2>
                            <p class="mb-0">Please enter your details to sign in</p>
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                  <input type="email" id="email" name="email"
                                         class="form-control border-end-0"
                                         placeholder="Enter Email ID"
                                         autocomplete="username" required>
                                  <span class="input-group-text border-start-0">
                                    <i class="ti ti-mail"></i>
                                  </span>
                            </div>
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Password</label>
                            <div class="pass-group">
                              <input type="password" id="password" class="pass-input form-control" name="password" placeholder="Enter Password">
                              <span class="ti toggle-password ti-eye-off"></span>
                            </div>
                          </div>

                          <button type="submit" class="btn btn-primary w-100">Sign In</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->