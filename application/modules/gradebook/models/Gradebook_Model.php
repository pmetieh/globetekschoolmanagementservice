<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gradebook_Model extends MY_Model {
    
    function __construct() {
        parent::__construct();
    }

   
    public function add_graded_item()
    {
    		echo '<h1>Add Graded Item</h1>';
    }

}

?>