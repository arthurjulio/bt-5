<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{
    public function welcome()
    {
        $data['session'] = $this->session->userdata();
        $data['title'] = "MyAbsent-Student";
        $this->load->view('student/template/header', $data);
        $this->load->view('student/welcome');
        $this->load->view('student/template/footer');
    }

    public function logout()
    {
        session_destroy();
        redirect('Auth');
    }
}
