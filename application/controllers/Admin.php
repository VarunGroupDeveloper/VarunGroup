<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

        public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->library('form_validation','session');
        $this->load->helper('url');

        // ✅ Restrict pages except login & logout
        if (!in_array($this->router->fetch_method(), ['login', 'login_authenticate', 'logout']) && !$this->session->userdata('logged_in')) {
            redirect(base_url('admin/login'));
        }
    }

    // ✅ Admin Dashboard
    public function dashboard()
    {
        $this->load->model('AdminModel');

        $data['title']  = 'Dashboard - VarunBajaj';
        $data['page']   = 'templates/admin/dashboard';



        $this->load->view('templates/admin/main', $data);
    }
public function login()
{

    $data['title'] = 'Login - VarunGroup';
    $data['page']  = 'templates/admin/auth/login';
    $this->load->view('templates/admin/auth/main', $data);
}

       // ✅ Authenticate Login
// ✅ Authenticate Login (minimal)
public function login_authenticate()
{
    // Expect POST from your form
    $email    = $this->input->post('email');     // e.g., admin123@gmail.com
    $password = $this->input->post('password');  // e.g., admin123

    if (!$email || !$password) {
        $this->session->set_flashdata('error', 'Email and Password are required.');
        redirect('admin/login'); return;
    }

    // Get user by email
    $admin = $this->AdminModel->get_admin_by_email($email);

    // Verify bcrypt hash and login
    if ($admin && password_verify($password, $admin['password'])) {
        $this->session->set_userdata([
            'admin_id'   => (int)$admin['id'],
            'admin_name' => $admin['name'],
            'admin_role' => $admin['role'],
            'logged_in'  => TRUE,
        ]);
        redirect('admin/dashboard'); return;
    }

    // Failed
    $this->session->set_flashdata('error', 'Invalid email or password.');
    redirect('admin/login');
}

        // ✅ Logout
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }
        // ✅ Manage Users (Super Admin Only)
    public function users()
    {
        if ($this->session->userdata('admin_role') !== 'superadmin') {
            redirect(base_url('admin/dashboard'));
        }

        $data['title'] = 'Manage Users - VarunGroup';
        $data['page'] = 'templates/admin/user/users';
        $data['users'] = $this->AdminModel->get_all_users();
        $this->load->view('templates/admin/main', $data);
    }

    // ✅ Add User (Super Admin Only)
    public function add_user()
    {
        if ($this->session->userdata('admin_role') !== 'superadmin') {
            redirect(base_url('admin/dashboard'));
        }

        $this->load->model('AdminModel');

        if ($this->input->post()) {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $role = $this->input->post('role');

            // ✅ Check if email already exists
            if ($this->AdminModel->check_email_exists($email)) {
                $this->session->set_flashdata('error', 'This email is already registered.');
                redirect(base_url('admin/users'));
            } else {
                // ✅ Insert user into database
                $user_data = [
                    'name' => $name,
                    'email' => $email,
                    'password' => $password,
                    'role' => $role,
                ];

                if ($this->AdminModel->register_admin($user_data)) {
                    $this->session->set_flashdata('success', 'User added successfully.');
                    redirect(base_url('admin/users'));
                } else {
                    $this->session->set_flashdata('error', 'Failed to add user. Please try again.');
                    redirect(base_url('admin/users'));
                }
            }
        }

        $data['title'] = 'Add New User - VarunGroup';
        $data['page'] = 'templates/admin/user/add_user';
        $this->load->view('templates/admin/main', $data);
    }

    // Edit User (Super Admin Only)
    public function edit_user($id)
    {
        if ($this->session->userdata('admin_role') !== 'superadmin') {
            redirect(base_url('admin/dashboard'));
        }

        // Fetch user details by ID
        $data['user'] = $this->AdminModel->get_user_by_id($id);
        if (!$data['user']) {
            redirect(base_url('admin/users'));
        }

        // Check if form is submitted
        if ($this->input->post()) {
            $updated_data = [
                'name' => $this->input->post('name'),
                'role' => $this->input->post('role'),
            ];

            if ($this->AdminModel->update_user($id, $updated_data)) {
                $this->session->set_flashdata('success', 'User updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to update user.');
            }

            redirect(base_url('admin/users'));
        }

        $data['title'] = 'Edit User - VarunGroup';
        $data['page'] = 'templates/admin/user/edit_user';
        $this->load->view('templates/admin/main', $data);
    }

    // ✅ Delete User (Super Admin Only)
    public function delete_user($id)
    {
        if ($this->session->userdata('admin_role') !== 'superadmin') {
            redirect(base_url('admin/dashboard'));
        }

        if ($this->AdminModel->delete_user($id)) {
            $this->session->set_flashdata('success', 'User deleted successfully.');
        } else {
            $this->session->set_flashdata('error', 'Failed to delete User.');
        }

        redirect(base_url('admin/users'));
    }
        //banners
    public function banner()
    {
        $this->load->model('AdminModel');
        $page = $this->input->get('page'); // e.g., ?page=home
        $data['title']   = 'Manage Banners - VarunBajaj';
        $data['page']    = 'templates/admin/banners/banner';
         $data['pages']         = $this->pages;   
        $data['selected_page'] = $page ?: 'all';
        $data['banners'] = $this->AdminModel->get_banners($data['selected_page']);
        $this->load->view('templates/admin/main', $data);
    }

private $pages = [
  'home'       => 'Home',
  'about'      => 'About',
  'history'    => 'History',
  'business'   => 'Business',
  'leadership' => 'Leadership',   // ⬅️ new
];
    // ✅ Add New Banner
    public function add_banner()
    {
        $this->load->model('AdminModel');

        if ($this->input->post()) {
            $banner_data = [
                'page'        => $this->input->post('page'),       
                'alt_name' => $this->input->post('alt_name'),
                'image_order' => $this->input->post('image_order'),
                'status' => $this->input->post('status'),
            ];

            $config['upload_path'] = './uploads/banners/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size'] = 5120;
            $this->load->library('upload', $config);

            // Upload Desktop Image
            if (!empty($_FILES['banner_image']['name']) && $this->upload->do_upload('banner_image')) {
                $upload_data = $this->upload->data();
                $banner_data['image'] = $upload_data['file_name'];
            }

          

            if ($this->AdminModel->add_banner($banner_data)) {
                $this->session->set_flashdata('success', 'Banner added successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to add banner.');
            }

            redirect(base_url('admin/banners'));
        }
    }

    // ✅ Delete Banner
    public function delete_banner($id)
    {
        $this->load->model('AdminModel');
        $banner = $this->AdminModel->get_banner_by_id($id);

        if ($banner) {
            // Delete desktop image
            if (!empty($banner['image']) && file_exists('./uploads/banners/' . $banner['image'])) {
                unlink('./uploads/banners/' . $banner['image']);
            }

            // Delete from DB
            if ($this->AdminModel->delete_banner($id)) {
                $this->session->set_flashdata('success', 'Banner deleted successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to delete banner from database.');
            }
        } else {
            $this->session->set_flashdata('error', 'Banner not found.');
        }

        redirect(base_url('admin/banners'));
    }


    // ✅ Edit Banner
    public function edit_banner($id)
    {
        $this->load->model('AdminModel');

        $data['banner'] = $this->AdminModel->get_banner_by_id($id);
        if (!$data['banner']) {
            $this->session->set_flashdata('error', 'Banner not found.');
            redirect(base_url('admin/banners'));
        }

        if ($this->input->post()) {
            $banner_data = [
                'alt_name' => $this->input->post('alt_name'),
                'image_order' => $this->input->post('image_order'),
                'status' => $this->input->post('status'),
            ];

            $config['upload_path'] = './uploads/banners/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size'] = 1024;
            $this->load->library('upload', $config);

            // Desktop Image upload
            if (!empty($_FILES['banner_image']['name']) && $this->upload->do_upload('banner_image')) {
                if (!empty($data['banner']['image']) && file_exists('./uploads/banners/' . $data['banner']['image'])) {
                    unlink('./uploads/banners/' . $data['banner']['image']);
                }
                $upload_data = $this->upload->data();
                $banner_data['image'] = $upload_data['file_name'];
            }

            // Mobile Image upload
            if (!empty($_FILES['mobile_banner_image']['name']) && $this->upload->do_upload('mobile_banner_image')) {
                if (!empty($data['banner']['mobile_image']) && file_exists('./uploads/banners/' . $data['banner']['mobile_image'])) {
                    unlink('./uploads/banners/' . $data['banner']['mobile_image']);
                }
                $upload_data = $this->upload->data();
                $banner_data['mobile_image'] = $upload_data['file_name'];
            }

            if ($this->AdminModel->update_banner($id, $banner_data)) {
                $this->session->set_flashdata('success', 'Banner updated successfully.');
            } else {
                $this->session->set_flashdata('error', 'Failed to update banner.');
            }

            redirect(base_url('admin/banners'));
        }
    }
}
?>
