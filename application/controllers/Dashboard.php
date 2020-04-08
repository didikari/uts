<?php 
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Dashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_mhs');
    }
    public function index()
    {
        // $data['judul']='Data Mahasiswa';
        // $data['mahasiswa'] = $this->Model_mhs->getAll();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
}