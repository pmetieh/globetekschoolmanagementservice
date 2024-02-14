<?php

 class Department_Model extends MY_Model
 {

 	public function __construct(){

 		parent::__construct();

 	}

 	//loads the Create college view
	public function createDepartment()
	{
		echo '<h1>'.'Create new department view ..'.'</h1>';
	}
 }
?>