<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mkeperluan extends CI_Model {


//get keperluan
  public function getkeperluan($id)
  {
    $query = $this->db->query("SELECT p.kode_keperluan as id,nama_keperluan,qty,kredit,statusuang,k.statuskas  from keperluan p join kwitansi k on p.kode_kwitansi = k.kode_kwitansi  WHERE kode_keperluan ='$id'");
   return $query->result_array();
  }


   //delete
   function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

    	//update
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
