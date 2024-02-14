<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Gradebook extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();

	    $this->load->model('Gradebook_Model', 'gbm', true);
			$this->load->model('GradedItem_Model', 'gim', true);
	}

	public function index()
	{
		//echo "<h1>Manage Gradebook</h1>";
		
			//$this->data['fname'] = 'Paul';
			$data = [];
			
			$this->layout->title('Manage Gradebook'. ' | ' . SMS);
            $this->layout->view('gradebookview', $this->data); 

			//return $this->cm->createCollege(); //echo 'In college controller index function'; 
		

	}	

	public function createGradeBookItem()
	{
		//$this->gim->add_graded_item();
		//echo '<h1>Gradebook Item Added</h1>';
		
		$data = array(
		'school_id' => $this->input->post('school_id'),
		'subject_id' => $this->input->post('subject_id'),
		'class_id' => $this->input->post('class_id'),
		'section_id' => $this->input->post('section_id'),
		'gradeitem_name' => $this->input->post('graded_item_name'),
		'gradeitem_type' => $this->input->post('graded_item_type'),
		'grade_max' => $this->input->post('max_grade'),
		'grade_min' => $this->input->post('min_grade'),
		'created_by' => $this->input->post('created_by')
		);

		print_r($data);
		echo "<br/>";

		try{
			//var_dump($this->com);

			echo '<br/>';

			//var_dump($this->gim->get_table_fields('grade_items'));
			echo "<br/>";

			$insertid = $this->gim->insert('grade_items', $data);
			if ($insertid) 
				echo "<h3>Grade item successfully added with Id </h3>".$insertid;
			else
			echo "<h3>failed to add the gradeitem </h3>".$this->input->post('graded_item_name');

				redirect($_SERVER['HTTP_REFERER']); // redirect back to previous page

			
		}catch(Exception $ex){

			echo $e->getMessage();
		}



		
	}

	public function addgrades()
	{
		//$this->gim->add_graded_item();
		echo '<h3>Grades entered</h3>';
		$post = array();
		foreach ( $_POST as $key => $value )
		{
			$post[$key] = $this->input->post($key);
		}
		var_dump($post);
	}

	public function deletegrades()
	{
		
	}
	public function getClasses($schoolid)
	{
		//query the db for the list of classes in this School
		// and return a json array of the list of classes
		//echo json_encode("Classes ".$schoolid);

		$resultObj = $this->gim->get_classes($schoolid);

		echo json_encode($resultObj);
	}

	public function getStudents($classId, $schoolId, $sectionId)
	{
		$resultObj = $this->gim->get_students($classId, $schoolId, $sectionId);

		echo json_encode($resultObj);
	}

	public function getSections($schoolid, $classid)
	{
		//returns a json string that has list of section(s)
		//for a specific School and class 

	//	echo json_encode("SchoolId ".$schoolid." ClassId ".$classid); //+$schoolid +  + $classid);

		$resultObj = $this->gim->get_sections($schoolid, $classid);

		echo json_encode($resultObj);
	}

	public function get_gradeitems($schoolid, $classid, $subjectid, $sectionid)
	{
		$data = [];
		$data['school_id'] = $schoolid;
        $data['class_id'] = $classid;
        $data['subject_id'] = $subjectid;
        $data['section_id'] = $sectionid;

        $resultObj = $this->gim->get_gradeitems($data);
        echo json_encode($resultObj);
	}

	public function getmakingpd($schoolId)
	{
		$result = $this->db->get_where('markingperiod', array('school_id' => $schoolId))->result();
		echo json_encode($result);
	}

	public function saveGradebookitems()
	{
		//retreive the data sent by ajax from the gradebook grade entry page
		$data = $this->input->raw_input_stream;
		/*$data = '[{"19":"55","20":"3","23":"11","studentId":"27","markingprd":"1",
				"subjectId":"14","schoolId":"10","sectionid":"35","class_id":"23","accademicYear":"8"},
				{"19":"42","20":"24","23":"52","studentId":"30","markingprd":"1",
				"subjectId":"14","schoolId":"10","sectionid":"35","class_id":"23","accademicYear":"8"}]';
					*/
		echo $data;
		
		//decode the json string sent from the client into an associate array
		//by setting the second parameter of json_decode() to true
	  	 $data =  json_decode($data, true);
	//	 var_dump($data);
			//echo $data;
		for ($i=0; $i < count($data); $i++) { 
			# code...
			//echo 'StudentId '.$data[$i]["studentId"];
			//create a new empty array
			$stuRec = [];
			
		
		 
		

			foreach ($data[$i] as $key => $value) {

				$stuRec["school_id"] = $data[$i]["schoolId"];
				$stuRec["student_id"] = $data[$i]["studentId"];
				$stuRec["subject_id"] = $data[$i]["subjectId"];
				$stuRec["marking_period_Id"] = $data[$i]["markingprd"];
				$stuRec["class_id"] = $data[$i]['class_id'];
				$stuRec["section_id"]  = $data[$i]['sectionid'];
				$stuRec["accademicYearId"] = $data[$i]["accademicYear"];
				# code...
				//create associative array
				//if the $key value is numeric
				if(is_int($key))
				{
					//echo $key.'Is integer<br>';
					//echo $i.'  '.$key.' : '.$value.'<br>';
					$stuRec["gradeitem_id"] = $key;
					$stuRec["gradeitem_grade"] = $value;
					//echo '<br>';
				}
				
			}
		//	echo '<br>';
		//	echo '<br>';
		//	var_dump($stuRec);
		//	echo '<br>';
		//	echo json_encode($stuRec);
		  } 
		   //echo gettype($data[0]["19"]);
		  
		   //echo 'StudentId '.$data[1]["studentId"];
		
	}	
	public function getAccademicYear($schoolId)
	{
		
        $query = "select id, session_year from academic_years where is_running = 1 and school_id =".$schoolId;
       // echo $query;
		$statement = $this->db->query($query);
        $result = $statement->result();
        $response = json_encode($result);  
		echo $response;
    
	}			
		
}

?> 