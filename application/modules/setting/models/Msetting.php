<?php 

class Msetting extends CI_Model{	

	//get data
	public function getuser($id){
		  $query = $this->db->query("select * from user where id ='$id'");
		 return $query->result_array();
		
	}
	
	//edit
    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	//update
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
	
}