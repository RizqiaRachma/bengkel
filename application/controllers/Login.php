<?php

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
    }

    function index()
    {
        if ($this->session->userdata('status') == "login") {
            redirect(base_url("user"));
        }
        $this->load->view('login');
    }

    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->load->model('m_user');
        $this->m_user->cek_login($username, md5($password));
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
