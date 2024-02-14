<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Course_Model', 'com', true);
	}

	public function index()
	{
		try{

			//$this->data['fname'] = 'Paul';
			
			$this->layout->title( 'Add New Course'. ' | ' . SMS);
            $this->layout->view('course/createcourseview', $this->data); 

			//return $this->cm->createCollege(); //echo 'In college controller index function'; 
		}catch(Exception $e){
			echo '<h1>'.$e->getMessage().'</h1>';
		}
		

	}	

	public function addCourse()
	{
		
		$data = array(
		'course_name' => $this->input->post('course_name'),
		'course_code' => $this->input->post('course_code'),
		'course_description' => $this->input->post('course_desc'),
		'department_id' => $this->input->post('department_id'),
		'course_cost' => $this->input->post('course_cost'),
		'credithrs' => $this->input->post('credithrs')
		);

		print_r($data);
		echo "<br/>";

		try{
			var_dump($this->com);

			echo '<br/>';

			var_dump($this->com->get_table_fields('courses'));
			echo "<br/>";

			$insertid = $this->com->insert('courses', $data);
			if ($insertid) 
				echo "Course successfully created with Id ".$insertid;
			else
			echo "failed to add the course ".$this->input->post('course_name');

			
		}catch(Exception $ex){

			echo $e->getMessage();
		}
		
	}

	public function getCourseDept($deptid)//
	{

		echo '<h1>Get Course</h1>';
		//get the liet of departments
		$deptid = intval($deptid);//1; 

		$dept_list = $this->db->get('departments')->result();

		//var_dump($dept_list);

		for ($i=0; $i < count($dept_list); $i++) { 
			// code...
			//echo $dept_list[$i]->department_name;
			echo $dept_list[$i]->id;
			if($dept_list[$i]->id == $deptid)
			{
				return $dept_list[$i]->department_name;
			}
		}
		return 0;/**/
	}

	public function editCourse($courseId)
	{
		//get the posted fields


		$data = array(
		'course_name' => $this->input->post('course_name'),
		'course_code' => $this->input->post('course_code'),
		'course_description' => $this->input->post('course_desc'),
		'department_id' => $this->input->post('department_id'),
		'course_cost' => $this->input->post('course_cost'),
		'credithrs' => $this->input->post('credithrs')
		);

		$indexarry = array($courseId);

		//update the fields of the course with id courseId

		$updateResponse = $this->com->update('courses', $data, $indexarry);

		if($updateResponse)
		{
			echo '<h1 style="color: blue;">Successfully updated course '.$this->input->post('course_name');
		}else
		{
			echo '<h1 style="color: red;">Could not updat course '.$this->input->post('course_name');
		}


	}
}

?>