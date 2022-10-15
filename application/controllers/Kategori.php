<?php
class Kategori extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('m_kategori');
        $this->load->helper('url');
    }

    function index()
    {
        $data['kategori'] = $this->m_kategori->tampil_data()->result();
        $this->load->view('header');
        $this->load->view('kategori/kategori', $data);
        $this->load->view('footer');
    }

    function tambah()
    {
        $this->load->view('header');
        $this->load->view('kategori/input');
        $this->load->view('footer');
    }
    function proses_tambah()
    {
        $kategori    = $this->input->post('kategori');

        $data = array(
            'kategori'    => $kategori,

        );

        $this->m_kategori->input_data($data, 'kategori');
        redirect('kategori');
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


    function delete($id)
    {
        $where = array('id' => $id);
        $this->m_kategori->hapus_data($where, 'kategori');
        redirect('kategori');
    }
}
