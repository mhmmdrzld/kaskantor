<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Mkwitansi extends CI_Model {


//get data dokumen
public function getkantor()
{

  $query = $this->db->query("	SELECT * from kwitansi WHERE statuskas='Kantor' ORDER BY status asc");
  return $query->result_array();
  // $data = array();

  // $options = array('statuskas' => 'Kantor');
  // $Q = $this->db->get_where('kwitansi',$options);
  //   if ($Q->num_rows() > 0){
  //     $data = $Q->result_array();
  //   }
  // $Q->free_result();
  // return $data;
}

//get data dokumen
public function getmess()
{
  $query = $this->db->query("	SELECT * from kwitansi WHERE statuskas='Mess' ORDER BY status asc");
  return $query->result_array();
}

   //delete
  function delete_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  //edit
  function edit_data($id){		
    $query = $this->db->query("SELECT *  from kwitansi  WHERE id ='$id'");
    return $query->result_array();
  }

  //get keperluan
  public function getkeperluan($id)
  {
    $query = $this->db->query("SELECT p.kode_keperluan as id,nama_keperluan,qty,kredit,statusuang  from keperluan p join kwitansi k on p.kode_kwitansi = k.kode_kwitansi WHERE k.id ='$id'");
   return $query->result_array();
  }

  	//update
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}
