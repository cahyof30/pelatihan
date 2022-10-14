<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    // Mencegah masuk controller tanpa session
    public function __construct()
    {
        parent::__construct();
        is_logged_in(); //function helper buatan sendiri
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/v_header', $data);
        $this->load->view('templates/v_sidebar', $data);
        $this->load->view('templates/v_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/v_footer');
    }
    // Function untuk menampilkan role
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/v_header', $data);
        $this->load->view('templates/v_sidebar', $data);
        $this->load->view('templates/v_topbar', $data);
        $this->load->view('admin/role', $data);
        $this->load->view('templates/v_footer');
    }

    // Function untuk menampilkan role access user
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();


        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/v_header', $data);
        $this->load->view('templates/v_sidebar', $data);
        $this->load->view('templates/v_topbar', $data);
        $this->load->view('admin/roleaccess', $data);
        $this->load->view('templates/v_footer');
    }

    // Function untuk merubah hak akses user
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Access has been changes!</div>');
    }
}
