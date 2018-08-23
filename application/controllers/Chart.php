<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('model_chart', 'chart');
    }

    public function index() {
        $results = $this->chart->get_chart_data();
        $data['chart_data'] = $results['chart_data'];
        $data['min_date'] = $results['min_date'];
        $data['max_date'] = $results['max_date'];
        $this->load->view('line_chart', $data);
    }

}