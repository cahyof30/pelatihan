<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    // definisikan helper utk mencegah masuk controller tanpa session
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/v_header', $data);
        $this->load->view('templates/v_sidebar', $data);
        $this->load->view('templates/v_topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/v_footer');
    }

    // function edit data user
    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/v_header', $data);
            $this->load->view('templates/v_sidebar', $data);
            $this->load->view('templates/v_topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/v_footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];


            // cek validitas gambar dan ukuran
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path']   = './assets/images/profile/';
                $this->load->library('upload', $config);

                // Jika lolos validasi, upload gambar profile
                if ($this->upload->do_upload('image')) {

                    // Hapus foto profil lama (agar tidak menumpuk)
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/images/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('user/edit');
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Your profile has been updated!</div>');
            redirect('user');
        }
    }


    // function ubah password
    public function chpasswd()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // Rules ubah password
        $this->form_validation->set_rules('currentpassword', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('newpassword1', 'New Password', 'required|trim|min_length[8]|matches[newpassword2]');
        $this->form_validation->set_rules('newpassword2', 'Confirm New Password', 'required|trim|min_length[8]|matches[newpassword1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/v_header', $data);
            $this->load->view('templates/v_sidebar', $data);
            $this->load->view('templates/v_topbar', $data);
            $this->load->view('user/chpasswd', $data);
            $this->load->view('templates/v_footer');
        } else {

            // password salah
            $currentpassword = $this->input->post('currentpassword');
            $newpassword = $this->input->post('newpassword1');
            if (!password_verify($currentpassword, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Current Password!!</div>');
                redirect('user/chpasswd');
            } else {
                // password tidakboleh sama
                if ($currentpassword == $newpassword) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">New Password cannot be the same as Current Password!!</div>');
                    redirect('user/chpasswd');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($newpassword, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password sucessfully changed!</div>');
                    redirect('user/chpasswd');
                }
            }
        }
    }

    public function v_course()
    {
        $data['title'] = 'View Course';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Instructor_model', 'instructor');

        $data['material'] = $this->instructor->getMaterial();
        $data['course'] = $this->db->get('user_course')->result_array();

        // $this->form_validation->set_rules('course_id', 'Course', 'required');
        // $this->form_validation->set_rules('title', 'Title', 'required');
        // $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/v_header', $data);
            $this->load->view('templates/v_sidebar', $data);
            $this->load->view('templates/v_topbar', $data);
            $this->load->view('user/v_course', $data);
            $this->load->view('templates/v_footer');
        }
        // } else {
        //     $data = [
        //         'course_id' => $this->input->post('course_id'),
        //         'title' => $this->input->post('title'),
        //         'url' => $this->input->post('url')
        //     ];
        //     $this->db->insert('user_material', $data);
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> New Material added!</div>');
        //     redirect('instructor');
        // }
    }
}
