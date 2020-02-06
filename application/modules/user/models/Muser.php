<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Muser extends CI_Model {

//get data
 public function getAll()
    {
      $query = $this->db->query("SELECT * from user  ORDER BY nama asc");
      return $query->result_array();
    }
  
//delete
  function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

//edit
public function getpengguna($id)
  {
    $query = $this->db->query("SELECT * from user  WHERE id ='$id'");
   return $query->result_array();
  }

  	//update
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
