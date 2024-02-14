<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends MY_Model{
	
	public function __construct()
	{
		parent::__construct();
	}


	/*public function addModule()
	{
		$data = array();
		$table = 'modules'
	
		$module_id = $this->insert($table, $data);
		echo "Module successfully created";
	}*/

}

?>