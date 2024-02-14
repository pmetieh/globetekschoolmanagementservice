<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class College extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('College_Model', 'cm', true);
	}

	public function index()
	{
		try{

			$this->data['fname'] = 'Paul';
			
			$this->layout->title( 'Create New College'. ' | ' . SMS);
            $this->layout->view('college/createcollegeview', $this->data); 

			//return $this->cm->createCollege(); //echo 'In college controller index function'; 
		}catch(Exception $e){
			echo '<h1>'.$e->getMessage().'</h1>';
		}
		

	}	

	public function addCollege()
	{
		//use the loaded college model and call the Model functions 
		try{

			$query = $this->db->get("schools");
			//echo '<br/>Schoolid '.$query->row()->id;
			
			$schoolid = $query->row()->id;//$this->session->userdata('school_id');
			//echo '<br/>';
			//print_r($this->session->userdata);
			
			//echo 'RoleId  '.$this->session->userdata('role_id');
		} catch(Exception $ex){

			echo $e->getMessage();
		}
		

		try{
			//get the exising school.

			

		$data = array(
		'college_name' => $this->input->post('college_name'),
		'college_code' => $this->input->post('college_code'),
		'dean_fname' => $this->input->post('dean_fname'),
		'dean_lastname' => $this->input->post('dean_lastname'),
		'dean_email' => $this->input->post('dean_email'),
		'dean_mobile' => $this->input->post('dean_mobile'),
		'school_id'=> $schoolid
		);

		//print_r($data);

		}catch(Exception $ex){

			echo $e->getMessage();
		}
		
		try{

			var_dump($this->cm);
			echo "<br/>";
			$this->cm->insert('colleges', $data);
			echo "College successfully created";
		}catch(Exception $ex){

			echo $e->getMessage();
		}
		
	}
}

?>