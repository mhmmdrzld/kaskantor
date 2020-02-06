<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mdokumen extends CI_Model {

//get data dokumen
 public function getAll()
    {
      $query = $this->db->query("SELECT *  from dokumen order by kode_dokumen desc");
      return $query->result_array();
    }
  

  function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  //get data kantor
  public function getkantor()
{

  $data = array();

  $options = array('statuskas' => 'Kantor','status' => 'Aktif');
  $Q = $this->db->get_where('kwitansi',$options);
    if ($Q->num_rows() > 0){
      $data = $Q->result_array();
    }
  $Q->free_result();
  return $data;
}

//get data mess
public function getmess()
{
  
  $data = array();

  $options = array('statuskas' => 'Mess','status' => 'Aktif');
  $Q = $this->db->get_where('kwitansi',$options);
    if ($Q->num_rows() > 0){
      $data = $Q->result_array();
    }
  $Q->free_result();
  return $data;
}

 //edit
 function edit_data($id){		
  $query = $this->db->query("SELECT *  from dokumen  WHERE id ='$id'");
  return $query->result_array();
}


  //get keperluan
  public function getkwitansi($id)
  {
    $query = $this->db->query("SELECT
    kwitansi.id AS id,kode_kwitansi, tanggal_kwitansi, statuskas 
  FROM
    kwitansi
    JOIN dokumen ON kwitansi.kode_dokumen = dokumen.kode_dokumen 
  WHERE
    dokumen.id = '$id' 
  ORDER BY
    kwitansi.statuskas");
   return $query->result_array();
  }

   	//update
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
