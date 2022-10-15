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
    function edit($id_trx)
    {
        $where                = array('id_trx' => $id_trx);
        $data['customer'] = $this->m_transaksi->tampil_customer()->result();
        $data['jenis_service'] = $this->m_transaksi->tampil_js()->result();
        $data['transaksi']    = $this->m_transaksi->edit_data($where, 'transaksi')->result();
        $this->load->view('header');
        $this->load->view('transaksi/edit', $data);
        $this->load->view('footer');
    }
    function update()
    {
        $id_trx            = $this->input->post('id_trx');
        $id_cust            = $this->input->post('id_cust');
        $id_jenis_service   = $this->input->post('id_jenis_service');
        $tgl_booking        = $this->input->post('tgl_booking');
        $tgl_service        = $this->input->post('tgl_service');
        $status = 'Belum Proses';

        $data = array(
            'id_trx'        => $id_trx,
            'id_cust'       => $id_cust,
            'id_jenis_service' => $id_jenis_service,
            'tgl_booking'   => $tgl_booking,
            'tgl_service'   => $tgl_service,
            'status'        => $status

        );
        $where = array(
            'id_trx' => $id_trx
        );

        $this->m_transaksi->update_data($where, $data, 'transaksi');
        redirect('transaksi');
    }

    function service($id_trx)
    {

        $status            = 'Sudah Proses';

        $data = array(
            'status'        => $status

        );
        $where = array(
            'id_trx' => $id_trx
        );

        $this->m_transaksi->update_data($where, $data, 'transaksi');
        redirect('transaksi');
    }



    function delete($id_trx)
    {
        $where = array('id_trx' => $id_trx);
        $this->m_data->hapus_data($where, 'transaksi');
        redirect('transaksi');
    }
}
