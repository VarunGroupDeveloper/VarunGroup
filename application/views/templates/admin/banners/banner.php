<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Banners</h2>
            </div>
            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <!-- ✅ Add Banner Button -->
                <div class="mb-2">
                    <button type="button" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addBannerModal">
                        <i class="fa-solid fa-plus me-2"></i> Add Banner
                    </button>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <!-- ✅ Success & Error Messages -->
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show auto-dismiss" role="alert">
                <?= $this->session->flashdata('success'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show auto-dismiss" role="alert">
                <?= $this->session->flashdata('error'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>

        <!-- Banner List -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Banner Management</h4>
                        <p class="card-text">Manage banners displayed on your website.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead class="table-dark">
                                  <tr>
                                    <th>S.No</th>
                                    <th>Page</th>
                                    <th>Image</th>
                                    <th>Alt Name</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                    <th class="text-center">Actions</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php $sno = 1; foreach ($banners as $banner): ?>
                                    <tr>
                                        <td><?= $sno++; ?></td>
                                        <td><span class="badge bg-secondary"><?= htmlspecialchars($banner['page']); ?></span></td>
                                          <td><?php if(!empty($banner['image'])): ?><img src="<?= base_url('uploads/banners/'.$banner['image']); ?>" width="100" class="rounded"><?php endif; ?></td>
                                        <td><?= $banner['alt_name']; ?></td>
                                        <td><?= $banner['image_order']; ?></td>
                                        <td>
                                            <span class="badge <?= $banner['status'] == 'active' ? 'badge-success' : 'badge-danger'; ?>">
                                                <?= ucfirst($banner['status']); ?>
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editBannerModal_<?= $banner['id']; ?>">
                                                <i class="fa-solid fa-pen"></i> Edit
                                            </a>

                                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete_banner_<?= $banner['id']; ?>">
                                                <i class="fa-solid fa-trash"></i> Delete
                                            </button>
                                        </td>
                                    </tr>
                                        <!--Edit modal -->
                                        <div class="modal fade" id="editBannerModal_<?= $banner['id']; ?>" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Banner</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="<?= base_url('admin/banners/edit/' . $banner['id']); ?>" method="post" enctype="multipart/form-data">
                                                        <div class="modal-body">

                                                            <div class="mb-3">
                                                                <label class="form-label">Current Banner Image</label>
                                                                <div>
                                                                    <img src="<?= base_url('uploads/banners/' . htmlspecialchars($banner['image'])); ?>" width="150" class="rounded">
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Upload New Banner Image</label>
                                                                <input type="file" name="banner_image" class="form-control">
                                                            </div>


                                                            <div class="mb-3">
                                                                <label class="form-label">Alt Image Name</label>
                                                                <input type="text" name="alt_name" class="form-control" value="<?= htmlspecialchars($banner['alt_name']); ?>" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Image order</label>
                                                                <input type="text" name="image_order" class="form-control" value="<?= htmlspecialchars($banner['image_order']); ?>" required>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="form-label">Status</label>
                                                                <select name="status" class="form-select">
                                                                    <option value="active" <?= ($banner['status'] == 'active') ? 'selected' : ''; ?>>Active</option>
                                                                    <option value="inactive" <?= ($banner['status'] == 'inactive') ? 'selected' : ''; ?>>Inactive</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary"><i class="fa-solid"></i>Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                     

                                    <!-- ✅ Delete Banner Modal (Inside Loop) -->
                                    <div class="modal fade" id="delete_banner_<?= $banner['id']; ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-body text-center">
                                                <i class="fa-solid fa-trash fs-36 text-danger"></i>
                                                    <h4 class="mt-2">Confirm Delete</h4>
                                                    <p>Are you sure you want to delete this banner?</p>
                                                    <div class="d-flex justify-content-center">
                                                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                                                        <a href="<?= base_url('admin/banners/delete/' . $banner['id']); ?>" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Banner List -->

    </div>
</div>
<!-- /Page Wrapper -->

<!-- ✅ Add Banner Modal (Outside the Loop) -->
<div class="modal fade" id="addBannerModal" tabindex="-1" aria-labelledby="addBannerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Banner</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/banners/add'); ?>" method="post" enctype="multipart/form-data">
              <div class="modal-body">

                <!-- Pages dropdown (choose where this banner appears) -->
                <div class="mb-3">
                  <label class="form-label">Page</label>
                  <select name="page" class="form-select" required>
                    <?php foreach ($pages as $slug => $label): ?>
                      <option value="<?= $slug; ?>"><?= $label; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="mb-3">
                  <label class="form-label">Upload Banner Image (Desktop)</label>
                  <input type="file" name="banner_image" class="form-control" required>
                </div>


                <div class="mb-3">
                  <label class="form-label">Alt Image Name</label>
                  <input type="text" name="alt_name" class="form-control" required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Image order</label>
                  <input type="text" name="image_order" class="form-control"  required>
                </div>

                <div class="mb-3">
                  <label class="form-label">Status</label>
                  <select name="status" class="form-select">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                  </select>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>

        </div>
    </div>
</div>
<!-- ✅ End Add Banner Modal -->
