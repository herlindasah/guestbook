<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

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

            'no_telp'       => $this->input->post("no_telp"),
            'nama_tamu'         => $this->input->post("nama_tamu"),
            'instansi'          => $this->input->post("instansi"),
            'tanggal_berkunjung'    => $this->input->post("tanggal_berkunjung"),
            'keperluan'         => $this->input->post("keperluan"),

        );

        $this->model_buku->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
                                                </div>');

        //redirect
        redirect('buku/');

    }

    public function edit($id_buku)
    {
        $id_buku = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Tamu',
            'data_tamu' => $this->model_buku->edit($id_buku)

        );

        $this->load->view('edit_tamu', $data);
    }

    public function update()
    {
        $id['id_buku'] = $this->input->post("id_buku");
        $data = array(

            'no_telp'           => $this->input->post("no_telp"),
            'nama_tamu'         => $this->input->post("nama_tamu"),
            'instansi'          => $this->input->post('instansi'),
            'tanggal_berkunjung'    => $this->input->post("tanggal_berkunjung"),
            'keperluan'         => $this->input->post("keperluan"),

        );

        $this->model_buku->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate didatabase.
                                                </div>');

        //redirect
        redirect('buku/');

    }

    public function hapus($id_buku)
    {
        $id['id_buku'] = $this->uri->segment(3);

        $this->model_buku->hapus($id);

        //redirect
        redirect('buku/');

    }

}