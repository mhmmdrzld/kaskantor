<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keperluan extends CI_Controller {


	public $folder = 'keperluan/';
	
	// public function __construct()
	 public function __construct(){
    parent::__construct();
    $this->load->helper('my_helper');
    $this->load->model('Mkeperluan');
  }
	



  //edit
  function edit($id){
    if($this->session->userdata('level')==='2'){
     // $data['kwitansi'] = $this->Mkwitansi->edit_data($id);
      $data['kep'] = $this->Mkeperluan->getkeperluan($id);
      $data['head'] 		= 'Edit Data Keperluan';
      $data['js'] 		= $this->folder.'js';
      //$data['modals'] 		= $this->folder.'modals';
      $data['content'] 	= $this->folder.'edit';
      //print_r($data['keperluan']);
      $this->load->view('template',$data);
    }else{
      echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
    }
  }
  
  //delete
  function delete($id){
    if($this->session->userdata('level')==='2'){
      $where = array('kode_keperluan' => $id);
      $this->Mkeperluan->delete_data($where,'keperluan');
      echo "<script>alert('Hapus Berhasil.'); location.href='".base_url("kwitansi")."';</script>";
    }else{
      echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
    }
  }

 

  //save
  public function save(){
    if($this->session->userdata('level')==='2'){
      $id = $_POST['zzz'];
      //print_r($id);
      $kode_kwitansi = $_POST['kode_kwitansi'];
      $statuskas = $_POST['statuskas'];
 
    $nama_keperluan = $_POST['nama_keperluan']; 
    $qty = $_POST['qty']; 
    $kredit = $_POST['kredit']; 
    if($statuskas == "Kantor"){
      $statusuang = "UangKantor";
      $jum = count($nama_keperluan);
      for($i = 0; $i<$jum; $i++){
          $data = array(
          'kode_keperluan' => '',
          'kode_kwitansi' => $kode_kwitansi,
          'nama_keperluan' => $_POST['nama_keperluan'][$i],
          'qty' => $_POST['qty'][$i],
          'kredit' => $_POST['kredit'][$i],
          'statusuang' => $statusuang
          
        );
          // echo '<pre>'.print_r($data).'</pre>';
      $this->db->insert('keperluan',$data);
      } 
    }else{
      $statusuang = $_POST['statusuang'];
      $jum = count($nama_keperluan);
      for($i = 0; $i<$jum; $i++){
          $data = array(
          'kode_keperluan' => '',
          'kode_kwitansi' => $kode_kwitansi,
          'nama_keperluan' => $_POST['nama_keperluan'][$i],
          'qty' => $_POST['qty'][$i],
          'kredit' => $_POST['kredit'][$i],
          'statusuang' => $statusuang[$i]
        );
          // echo '<pre>'.print_r($data).'</pre>';
      $this->db->insert('keperluan',$data);
      } 
    }
   echo "<script>alert('Tambah Berhasil.'); location.href='".base_url("kwitansi/edit/".$id)."';</script>";
  }else{
    echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
  }
  }

 // update
	function update(){ 
    $kode_keperluan = $_POST['kode_keperluan'];
    	$nama_keperluan = $_POST['nama_keperluan'];
      $qty = $_POST['qty'];
       $kredit = $_POST['kredit'];
       $statusuang = $_POST['statusuang'];

		$data = array(
      'nama_keperluan' => 	$nama_keperluan,
      'qty' => 	$qty,
      'kredit' => 	$kredit,
      'statusuang' => 	$statusuang
		);
		//print_r($data);
		$where = array(
			'kode_keperluan' => $kode_keperluan
		);
	
		$this->Mkeperluan->update_data($where,$data,'keperluan');
		echo "<script>alert('Berhasil diubah.'); location.href='".base_url("kwitansi")."';</script>";
	}
}
