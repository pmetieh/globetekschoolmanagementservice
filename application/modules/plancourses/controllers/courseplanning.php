<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Courseplanning extends MY_Controller
{
    public $data = array();
    
    public function __construct()
    {
        parent::__construct(); 
        try {
        $this->load->model('courseplanning_model');
        //$this->load->model('CoursePlanning_Model', 'courseplanning', true) or die('error');//, 'courseplanning', true);
    } catch(Exception $e)
    {
        echo '<h1 style="font-size: bold; color: white;">'.$e->getMessage().'</h1>';
    }

    }

    public function index()
    {
       // $this->load->model('CoursePlanning_Model', 'courseplanning', true);
       // $this->CoursePlanning_Model->get_subject_list('1', '1');
        $this->layout->title('Course Planning');

        $this->layout->view('plancoursesview', $this->$data);
        /// echo '<h1 style="font-size: bold; color: white;">'.'SchoolID '.$this->session->userdata('school_id').'</h1>';
        
    }


    public function addndrop()
    {
        $this->layout->title('AddNDrop');

        $this->layout->view('addndropview', $this->$data);

    }

    

}

?>