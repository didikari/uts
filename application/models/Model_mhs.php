<?php

class Model_mhs extends CI_Model{
    
    public function getAll()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
}