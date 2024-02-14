<?php

class Payment_model extends MY_Model{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function mobilepay()
    {
        return 'Mobile money payment successful';
    }

}



?>