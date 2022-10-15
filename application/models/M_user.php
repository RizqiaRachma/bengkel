<?php

class M_user extends CI_Model
{
    public function get_user_by_id($nip)
    {
        return $this->db->get_where('user', array('id' => $id))->row();
    }

    function tampil_data()
    {
        return $this->db->get('user');
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
    function cek_login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $cek      = $this->db->get();
        if ($cek->num_rows() > 0) {
            foreach ($cek->result() as $u) {

                $sess = array(
                    'status'    => "login",
                    'id'        => $u->id,
                    'nama'      => $u->nama,
                    'username'     => $u->username,
                    'password'    => $u->password,
                );
                $this->session->set_userdata($sess);
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Selamat anda berhasil login. 
</div>');
                redirect(base_url("home"));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 Username dan Password Salah!
</div>');
            redirect(base_url("login"));
        }
    }
}
