<div class="page-wrapper">
    <div class="content">
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Manage Users</h2>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                <!-- ✅ Add Banner Button -->
                <div class="mb-2">
                    <button type="button" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addUserModal">
                        <i class="fa-solid fa-plus me-2"></i> Add User
                    </button>
                </div>
            </div>
    </div>
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success fade show" id="success-alert">
                <?= $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger fade show" id="error-alert">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead class="table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user['name']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= ucfirst($user['role']); ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/users/edit/' . $user['id']); ?>" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit_user">
                                    <i class="fa-solid fa-pen"></i> Edit
                                </a>
                                <!-- ✅ Button to Open Modal -->
                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $user['id']; ?>">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                            </td>


                        </tr>
                            <div class="modal fade" id="edit_user" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Edit User</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="<?= base_url('admin/users/edit/' . $user['id']); ?>"  method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                 <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" value="<?= $user['name']; ?>" required>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email (cannot be changed)</label>
                                            <input type="email" class="form-control" value="<?= $user['email']; ?>" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Role</label>
                                            <select name="role" class="form-select">
                                                <option value="admin" <?= $user['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                                                <option value="superadmin" <?= $user['role'] == 'superadmin' ? 'selected' : ''; ?>>Super Admin</option>
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
                        <!-- /Edit user -->
                        
                            <!-- ✅ Delete Confirmation Modal -->
                            <div class="modal fade" id="deleteModal<?= $user['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel">
                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                <div class="modal-content">
                                    <div class="modal-body text-center">
                                        <i class="fa-solid fa-trash fs-36 text-danger"></i>
                                        <h4 class="mt-2">Confirm Delete</h4>
                                        <p>Are you sure you want to delete <strong><?= $user['name']; ?></strong>?</p>

                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                                            <a href="<?= base_url('admin/users/delete/' . $user['id']); ?>" class="btn btn-danger ">
                                                Delete
                                            </a>
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
<!-- ✅ Add Banner Modal (Outside the Loop) -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New User</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/users/add'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                   <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="superadmin">Super Admin</option>
                </select>
            </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary"><i class="fa-solid"></i>Add</button>
                </div>

            </form>
        </div>
    </div>
</div>
