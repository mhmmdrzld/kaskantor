<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mperusahaan extends CI_Model {


//get perusahaan
  public function getoffice()
  {
    $query = $this->db->query("SELECT * from perusahaan");
   return $query->result_array();
  }


    	//update
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
  }


}
