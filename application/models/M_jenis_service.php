<?php

class M_jenis_service extends CI_Model
{
    function tampil_data()
    {
        $query = $this->db->query("Select * From jenis_service INNER JOIN kategori ON jenis_service.id_kategori = kategori.id");
        return $query->result();
    }

    function tampil_kategori()
    {
        return $this->db->get('kategori');
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
