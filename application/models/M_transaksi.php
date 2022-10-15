<?php

class M_transaksi extends CI_Model
{
    function tampil_data()
    {
        $query = $this->db->query("Select * From transaksi INNER JOIN customer ON transaksi.id_cust = customer.id_cust JOIN jenis_service ON transaksi.id_jenis_service = jenis_service.id");
        return $query->result();
    }

    function tampil_customer()
    {
        return $this->db->get('customer');
    }

    function tampil_js()
    {
        return $this->db->get('jenis_service');
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
