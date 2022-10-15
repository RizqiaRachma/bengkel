<?php
class Transaksi extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("login"));
        }
        $this->load->model('m_transaksi');
        $this->load->helper('url');
    }

    function index()
    {
        $data['transaksi'] = $this->m_transaksi->tampil_data();
        $this->load->view('header');
        $this->load->view('transaksi/booking', $data);
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
        $data['customer'] = $this->m_transaksi->tampil_customer()->result();
        $data['jenis_service'] = $this->m_transaksi->tampil_js()->result();
        $this->load->view('header');
        $this->load->view('transaksi/input', $data);
        $this->load->view('footer');
    }
    function proses_tambah()
    {
        $id_cust            = $this->input->post('id_cust');
        $id_jenis_service   = $this->input->post('id_jenis_service');
        $tgl_booking        = $this->input->post('tgl_booking');
        $tgl_service        = $this->input->post('tgl_service');
        $status = 'Belum Proses';

        $data = array(
            'id_cust'       => $id_cust,
            'id_jenis_service' => $id_jenis_service,
            'tgl_booking'   => $tgl_booking,
            'tgl_service'   => $tgl_service,
            'status'        => $status

        );

        $this->m_transaksi->input_data($data, 'transaksi');
        redirect('transaksi');
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
