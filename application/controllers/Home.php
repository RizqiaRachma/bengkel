<?php
class Home extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->helper('url');
    }

    function index()
    {
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
    }
}
