<?php
class AdminModel extends CI_Model {
    // ✅ Get admin details by email
    public function get_admin_by_email($email) {
        return $this->db->where('email', $email)->get('users')->row_array();
    }
        // ✅ Check if email already exists
    public function check_email_exists($email) {
        return $this->db->where('email', $email)->get('users')->num_rows() > 0;
    }

    // ✅ Insert new admin user
    public function register_admin($data) {
        return $this->db->insert('users', $data);
    }
        // ✅ Get all users
    public function get_all_users() {
        return $this->db->get('users')->result_array();
    }
    
    // ✅ Delete a user
    public function delete_user($id) {
        return $this->db->delete('users', ['id' => $id]);
    }
        // ✅ Get user details by ID
    public function get_user_by_id($id) {
        return $this->db->where('id', $id)->get('users')->row_array();
    }

    // ✅ Update user details
    public function update_user($id, $data) {
        return $this->db->where('id', $id)->update('users', $data);
    }
        //banner 
      // ✅ Add New Banner
      public function add_banner($data) {
        return $this->db->insert('banners', $data);
    }

    // ✅ Get All Banners
    public function get_banners($page = null)
    {
        $this->db->from('banners');
        if ($page && $page !== 'all') {
            $this->db->where('page', $page);
        }
        return $this->db->order_by('image_order', 'ASC')->get()->result_array();
    }
    public function get_active_banners() {
        $this->db->where('status', 'active');
        $query = $this->db->get('banners');
        return $query->result_array();
    }
     public function get_active_banners_by_page($page)
    {
        return $this->db->from('banners')
                        ->where(['page' => $page, 'status' => 'active'])
                        ->order_by('image_order', 'ASC')
                        ->get()->result_array();
    }
    // ✅ Get Banner by ID
    public function get_banner_by_id($id) {
        return $this->db->where('id', $id)->get('banners')->row_array();
    }

    // ✅ Update Banner
    public function update_banner($id, $data) {
        return $this->db->where('id', $id)->update('banners', $data);
    }

    // ✅ Delete Banner
    public function delete_banner($id) {
        return $this->db->where('id', $id)->delete('banners');
    }
}

?>