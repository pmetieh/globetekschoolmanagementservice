<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Managemodule extends MY_Controller{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Module', 'module', true);
	}


	public function index()
	{
		
		//$this->data['fname'] = 'Paul';
			
		$this->layout->title( 'Create New College'. ' | ' . SMS);
        $this->layout->view('module/moduleview', $this->data); 
	}

	public function addModule()
	{
		$data = array(
		'module_name' => $this->input->post('module_name'),
		'module_slug' => $this->input->post('module_slug'),
		'status' => $this->input->post('status'),
		'created_by' => $this->input->post('created_by'),
		'modified_by' => $this->input->post('modified_by')
		);

		print_r($data);
		$moduleid = $this->module->insert('modules', $data);
		if($moduleid)
		echo '<h1>Module with id '.$moduleid.' Added</h1>';
	}

	public function addOperation()
	{
		$operationData = array();

		$operationData = array(
		'module_id' => $this->input->post('module_id'),
		'operation_name'=> $this->input->post('operation_name'),
		'operation_slug' => $this->input->post('operation_slug'),
		'is_view_vissible' => $this->input->post('is_view_vissible'),
		'is_add_vissible' => $this->input->post('is_add_vissible'),
		'is_edit_vissible' => $this->input->post('is_edit_vissible'),
		'is_delete_vissible' => $this->input->post('is_delete_vissible'),
		'status' => $this->input->post('status'),
		'created_by' => $this->input->post('created_by'),
		'modified_by' => $this->input->post('modified_by')
		);

		try{

			$opid = $this->db->insert('operations', $operationData);
			echo 'Insert Id '.$this->db->insert_id().'<br>';
			if($opid)
			{
				echo '<h1>Operation with id '.$opid.' Added</h1>'; 
				print_r($operationData);
			}
		}catch(Exception $e)
		{
			echo '<h1>'.$e->getMessage().'</h>';
		}
		



		
		

	}
	
}
?>