<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instructor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in(); //function helper buatan sendiri
    }

    public function deleteUser()
    {
        $this->load->model('Instructor_model', 'ins');
        $where = ['id' => $this->uri->segment(3)];
        $this->ins->deleteUser($where);
        redirect('instructor');
    }
    public function index()
    {
        $data['title'] = 'Instructor';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Instructor_model', 'instructor');

        $data['material'] = $this->instructor->getMaterial();
        $data['course'] = $this->db->get('user_course')->result_array();

        $this->form_validation->set_rules('course_id', 'Course', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/v_header', $data);
            $this->load->view('templates/v_sidebar', $data);
            $this->load->view('templates/v_topbar', $data);
            $this->load->view('instructor/index', $data);
            $this->load->view('templates/v_footer');
        } else {
            $data = [
                'course_id' => $this->input->post('course_id'),
                'title' => $this->input->post('title'),
                'url' => $this->input->post('url')
            ];
            $this->db->insert('user_material', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New Material added!</div>');
            redirect('instructor');
        }
    }
}
