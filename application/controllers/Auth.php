<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        if ($_REQUEST == TRUE) {
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
