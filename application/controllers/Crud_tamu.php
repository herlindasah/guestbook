<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_Tamu extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_buku'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data Tamu',
            'data_tamu' => $this->model_buku->get_all(),

        );

        $this->load->view('data_tamu', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Tamu'

        );

        $this->load->view('tambah_tamu', $data);
    }

    public function simpan()
    {
        $data = array(

            'no_telp'           => $this->input->post("no_telp"),
            'nama_tamu'         => $this->input->post("nama_tamu"),
            'instansi'          => $this->input->post("instansi"),
            'tanggal_berkunjung'=> date('Y-m-d'),
            'keperluan'         => $this->input->post("keperluan"),
            'bertemu'           => $this->input->post("bertemu"),
            'jam_datang'        => date('H:i:s', strtotime('+5 hour'))
        );

        $this->model_buku->simpan($data);

        $_SESSION['success'] = "Data berhasil diupdate!";

        //redirect
        redirect('buku/');

    }

}