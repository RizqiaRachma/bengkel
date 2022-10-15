<?php
class Customer extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('m_customer');
        $this->load->helper('url');
    }

    function index()
    {
        $data['customer'] = $this->m_customer->tampil_data()->result();
        $this->load->view('header');
        $this->load->view('customer/customer', $data);
        $this->load->view('footer');
    }

    function tambah()
    {
        $this->load->view('header');
        $this->load->view('customer/input');
        $this->load->view('footer');
    }
    function proses_tambah()
    {
        $id_cust = $this->input->post('id_cust');
        $nama   = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $no_hp  = $this->input->post('no_hp');
        $data = array(
            'id_cust'   => $id_cust,
            'nama'      => $nama,
            'alamat'    => $alamat,
            'no_hp'     => $no_hp

        );

        $this->m_customer->input_data($data, 'customer');
        redirect('customer');
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
