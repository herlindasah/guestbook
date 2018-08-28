<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_tamu'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data Tamu',
            'v_tamu' => $this->model_tamu->get_all(),

        );

        $this->load->view('v_tamu', $data);
    }
    
    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Tamu'

        );

        $this->load->view('v_tambahtamu', $data);
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
            'jam_datang'        => date('H:i:s', strtotime('+5 hour')),
        );

        $this->model_tamu->simpan($data);

        $_SESSION['success'] = "Data berhasil diupdate!";

        //redirect
        redirect('tamu/');

    }

}