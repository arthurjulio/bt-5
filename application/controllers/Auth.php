<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->helper(array('url', 'download'));
    }

    public function index()
    {
        if (!empty($_REQUEST)) {
            $this->_login();
        } else {
            $this->load->view('auth');
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == "admin") {
            if ($password == "asdasasd") {
                $sess_data = array(
                    'nis' => '12345',
                    'nama' => 'Arthur Julio Risa',
                    'kelas' => '5',
                    'logged_in' => TRUE,
                );
                $this->session->set_userdata($sess_data);
                redirect(base_url('Student/welcome'), $sess_data);
            } else {
                $this->session->set_flashdata('message', 'Password Salah.');
                redirect(base_url('Auth'));
            }
        } else {
            $this->session->set_flashdata('message', 'Username Tidak Terdaftar.');
            redirect(base_url('Auth'));
        }
    }
}
