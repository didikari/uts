<?php

class Model_mhs extends CI_Model{
    
    public function getAll()
    {
        return $this->db->get('mahasiswa');
    }

    public function input_mhs($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function hapus_mhs($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);

    }

    public function edit_mhs($where,$table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update_mhs($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    
}