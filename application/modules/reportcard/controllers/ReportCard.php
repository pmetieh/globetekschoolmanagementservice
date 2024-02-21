<?php

class ReportCard extends My_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        
        $this->load->model('Reportcard_Model', 'reportcard', true);
       // $this->load->helper('report');
    }

    public function index()
    {
        echo "Loading index page";

       $this->layout->title($this->lang->line('reportcard') . ' | ' . SMS);
       $this->layout->view('index', $this->data);
    }

    public function reportcard()
    {
        echo "Loading report card page";
    }
}
?>