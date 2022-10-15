<?php
class Jenis_service extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('m_jenis_service');
        $this->load->helper('url');
    }

    function index()
    {
        $data['jenis_service'] = $this->m_jenis_service->tampil_data();
        $this->load->view('header');
        $this->load->view('jenis_service/jenis_service', $data);
        $this->load->view('footer');
    }

    function delete($id)
    {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'pengguna');
        redirect('KM/pengguna');
    }
    function tambah()
    {
        $data['kategori'] = $this->m_jenis_service->tampil_kategori()->result();
        $this->load->view('header');
        $this->load->view('jenis_service/input', $data);
        $this->load->view('footer');
    }
    function proses_tambah()
    {
        $id_kategori   = $this->input->post('id_kategori');
        $jenis_service = $this->input->post('jenis_service');
        $data = array(
            'id_kategori'   => $id_kategori,
            'jenis_service' => $jenis_service

        );

        $this->m_jenis_service->input_data($data, 'jenis_service');
        redirect('jenis_service');
    }
    function edit($id)
    {
        $where                = array('id' => $id);
        $data['pengguna']    = $this->m_data->edit_data($where, 'pengguna')->result();
        $this->load->view('header');
        $this->load->view('pengguna/edit_pengguna', $data);
        $this->load->view('footer');
    }
    function update()
    {
        $id            = $this->input->post('id');
        $username    = $this->input->post('username');
        $cabang        = $this->input->post('cabang');
        $level        = $this->input->post('level');
        $data = array(
            'username'    => $username,
            'cabang'    => $cabang,
            'level'        => $level

        );
        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'pengguna');
        redirect('KM/pengguna');
    }


    function update_info()
    {
        $id            = $this->input->post('id');
        $info         = $this->input->post('info');
        $data = array(
            'info'    => $info

        );
        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'info');
        redirect('KM/index');
    }
}
