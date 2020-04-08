<?php 
defined('BASEPATH') OR exit('No direct scripts access allowed');

class Mahasiswa extends CI_Controller{
    
    public function index()
    {
        $data['mahasiswa'] = $this->Model_mhs->getAll()->result();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('mahasiswa/mahasiswa_list',$data);
        $this->load->view('template/footer');
    }

    public function tambah_mahasiswa ()
    {
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_lahir = $this->input->post('tanggal_lahir');
        $jurusan = $this->input->post('jurusan');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama'          => $nama,
            'nim'           => $nim,
            'tanggal_lahir' => $tgl_lahir,
            'jurusan'       => $jurusan,
            'alamat'        => $alamat
        );
        $this->Model_mhs->input_mhs($data,'mahasiswa');
        
        redirect('mahasiswa');
    }

    public function hapus ($id)
    {
        $where = array ('id' => $id);
        $this->Model_mhs->hapus_mhs($where, 'mahasiswa');
        redirect ('mahasiswa');
    }

    public function edit($id)
    {
       $where = array('id' =>$id);
       $data['mahasiswa'] = $this->Model_mhs->edit_mhs($where,'mahasiswa')->result(); 
       $this->load->view('template/header');
       $this->load->view('template/sidebar');
       $this->load->view('mahasiswa/edit_mahasiswa',$data);
       $this->load->view('template/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $tgl_lahir = $this->input->post('tanggal_lahir');
        $jurusan = $this->input->post('jurusan');
        $alamat = $this->input->post('alamat');

        $data = array(
            'nama'          => $nama,
            'nim'           => $nim,
            'tanggal_lahir' => $tgl_lahir,
            'jurusan'       => $jurusan,
            'alamat'        => $alamat
        );
        $where = array(
            'id' => $id
        );
        $this->Model_mhs->update_mhs($where,$data,'mahasiswa');
        redirect('mahasiswa');
    }
}