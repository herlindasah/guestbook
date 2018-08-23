<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_chart extends CI_Model {

    private $tbl_buku = 'tbl_buku';

    function __construct() {
        
    }

    function get_chart_data() {
        $query = $this->db->get($this->tbl_buku);
        $results['chart_data'] = $query->result();
        $this->db->select_min('tanggal_berkunjung');
        $this->db->limit(1);
        $query = $this->db->get($this->tbl_buku);
        $results['min_date'] = $query->row()->tanggal_berkunjung;
        $this->db->select_max('tanggal_berkunjung');
        $this->db->limit(1);
        $query = $this->db->get($this->tbl_buku);
        $results['max_date'] = $query->row()->tanggal_berkunjung;
        return $results;
    }

}