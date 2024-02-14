<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Markingperiod extends MY_Controller{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Markingperiod_Model', 'mpm', true);
	}


	public function index()
	{
		
		//$this->data['fname'] = 'Paul';
			
		$this->layout->title( 'Create New Marking Period'. ' | ' . SMS);
        $this->layout->view('markingperiod/index', $this->data); 
	}

    public function createMarkingPeriod()
    {
        echo '<h3>Create Marking period</h3>';
    
		//$this->gim->add_graded_item();
		//echo '<h1>Gradebook Item Added</h1>';
		
		$data = array(
		'school_id' => $this->input->post('schoolId'),
		'marking_periodName' => $this->input->post('markingperiodname')
		);

		print_r($data);
		echo "<br/>";

		try{
			//var_dump($this->com);

			echo '<br/>';

			//var_dump($this->gim->get_table_fields('grade_items'));
			echo "<br/>";

			$insertid = $this->mpm->insert('markingperiod', $data);
			if ($insertid) 
				echo "<h3>Marking period successfully added with Id </h3>".$insertid;
			else
			echo "<h3>failed to add the markig period </h3>".$this->input->post('markingperiodname');

				redirect($_SERVER['HTTP_REFERER']); // redirect back to previous page

			
		}catch(Exception $e){

			echo $e->getMessage();
		}



		
	}
}
?>