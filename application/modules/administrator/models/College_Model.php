<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class College_Model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
	}


	//loads the Create college view
	public function createCollege()
	{
		echo '<h1>'.'Load create college view ..'.'</h1>';
	}
}


?>