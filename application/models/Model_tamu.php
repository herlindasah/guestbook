<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tamu extends CI_model{

    public function get_all()
    {
        $query = $this->db->select("*")
                 ->from('tbl_buku')
                 ->order_by('id_buku', 'DESC')
                 ->get();
        return $query->result();
    }

    public function simpan($data)
    {

        $query = $this->db->insert("tbl_buku", $data);

        if($query){
            return true;
        }else{
            return false;
        }

    }


    public function get_guest()
    {
        $this->db->distinct();
        return $this->db->get('tbl_buku')->result();
    }

}