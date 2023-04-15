<?php

class PaymentModel extends CI_Model
{
	private $tblName = "payments";
	
	public function insert($data)
	{
		print_r($data);

		if($this->db->insert("payments", $data))
			return true;
		
	}

	public function select()
	{

	}

	public function update($data, $id)
	{
		$this->db->set($data); 
         $this->db->where("id", $id); 
         $this->db->update("payments", $data); 
	}

	public function delete($id)
	{
		 if ($this->db->delete("payments", "id = ".$id)) { 
            return true; 
         } 
	}
}


?>