<?php

class Department extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Department_Model', 'dm', true);
	}

	public function index()
	{
		try{

			$this->data['fname'] = 'Paul';
			
			$this->layout->title( 'Add New Department'. ' | ' . SMS);
            $this->layout->view('department/createdepartmentview', $this->data); //tabview

			//return $this->cm->createCollege(); //echo 'In college controller index function'; 
		}catch(Exception $e){
			echo '<h1>'.$e->getMessage().'</h1>';
		}
		

	}	

	public function addDepartment()
	{


		$deptinfo = array(

		'college_id' => $this->input->post('college_id'),
		'department_name' => $this->input->post('department_name'),
		'department_code' => $this->input->post('department_code'),
		'hod_fname' => $this->input->post('hod_fname'),
		'hod_lname' => $this->input->post('hod_lname'),
		'hod_email' => $this->input->post('hod_email'),
		'hod_phone' => $this->input->post('hod_phone')
		);

		//call the department model and add the new department

		$insertid = $this->dm->insert("departments", $deptinfo);
		if($insertid)
			echo '<h1>'.'Created department with id '.$insertid.'</h1>';
		else
			return 'Failed to add department';
	}
}

?>