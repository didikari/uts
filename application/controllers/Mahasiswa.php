<?php 
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Mahasiswa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_mhs');
    }
    public function index()
    {
        $data['judul']='Data Mahasiswa';
        $data['mahasiswa'] = $this->Model_mhs->getAll();
        $this->load->view('template/head',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar');
        $this->load->view('mahasiswa/mahasiswa_list',$data);
        $this->load->view('template/footer');
    }
}