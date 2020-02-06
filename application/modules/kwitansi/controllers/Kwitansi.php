<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kwitansi extends CI_Controller {


	public $folder = 'kwitansi/';
	
	// public function __construct()
	 public function __construct(){
    parent::__construct();
    $this->load->helper('my_helper');
    $this->load->model('Mkwitansi');
  }
	

	//halaman index
	public function index()
	{
    if($this->session->userdata('level')==='2' or $this->session->userdata('level')==='3' ){
      $data['kwitansi'] = $this->Mkwitansi->getkantor();
      $data['kwitansim'] = $this->Mkwitansi->getmess();
      $data['head'] 		= 'Data Kwitansi';
      $data['content'] 	= $this->folder.'default';
      $data['style'] 		= $this->folder.'style';
      $data['js'] 		= $this->folder.'js';
      $data['modals'] 		= $this->folder.'modals';
      $this->load->view('template', $data);
    }else{
      echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
    }
  }

  //edit
  function edit($id){
    if($this->session->userdata('level')==='2'){
      $data['kwitansi'] = $this->Mkwitansi->edit_data($id);
      $data['kep'] = $this->Mkwitansi->getkeperluan($id);
      $data['head'] 		= 'Edit Data Kwitansi';
       $data['js'] 		= $this->folder.'js';
       $data['style'] 		= $this->folder.'style';
      $data['modals'] 		= $this->folder.'modals';
      $data['content'] 	= $this->folder.'edit';
      //print_r($data['keperluan']);
      $this->load->view('template',$data);
    }else{
      echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
    }
  }

  //edit
  function detail($id){
    if($this->session->userdata('level')==='2' or $this->session->userdata('level')==='3'){
      $data['kwitansi'] = $this->Mkwitansi->edit_data($id);
      $data['kep'] = $this->Mkwitansi->getkeperluan($id);
      $data['head'] 		= 'Lihat Data Kwitansi';
       $data['js'] 		= $this->folder.'js';
       $data['style'] 		= $this->folder.'style';
      $data['modals'] 		= $this->folder.'modals';
      $data['content'] 	= $this->folder.'detail';
      //print_r($data['keperluan']);
      $this->load->view('template',$data);
    }else{
      echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
    }
  }
  
  //delete
  function delete($id){
    if($this->session->userdata('level')==='2'){
      $where = array('id' => $id);
      $this->Mkwitansi->delete_data($where,'kwitansi');
      echo "<script>alert('Hapus Berhasil.'); location.href='".base_url("kwitansi")."';</script>";
    }else{
      echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
    }
  }

  //savekantor
  public function save(){
    if($this->session->userdata('level')==='2'){
    $nama_keperluan = $_POST['nama_keperluan']; 
    $qty = $_POST['qty']; 
    $kredit = $_POST['kredit']; 
    $kode_kwitansi = $_POST['kode_kwitansi']; 
    $tanggal_kwitansi = $_POST['tanggal_kwitansi']; 
    $status = 'Aktif';
    $statuskas = 'Kantor';
    $statusuang = 'UangKantor';
    //2018-12-10
    $bulan = substr($tanggal_kwitansi,5,-3);
    $tahun = substr($tanggal_kwitansi,2,-6);
    $kode_kwitansinew = $kode_kwitansi.".".$bulan.".".$tahun;
    //echo $kode_kwitansi.".".$bulan.".".$tahun;


$data1 = array(
  'kode_kwitansi' => $kode_kwitansinew,
  'tanggal_kwitansi' => $tanggal_kwitansi,
  'statuskas' => $statuskas,
  'status' => $status
);
 $this->db->insert('kwitansi',$data1);

    $jum = count($nama_keperluan);
   // echo $jum;
    for($i = 0; $i<$jum; $i++){
        $data = array(
        'kode_keperluan' => '',
        'kode_kwitansi' => $kode_kwitansinew,
        'nama_keperluan' => $_POST['nama_keperluan'][$i],
        'qty' => $_POST['qty'][$i],
        'kredit' => $_POST['kredit'][$i],
        'statusuang' => $statusuang
        
      );
        // print_r($data1);
        // echo '<br>';
       $this->db->insert('keperluan',$data);
    } 
    echo "<script>alert('Tambah Berhasil.'); location.href='".base_url("kwitansi")."';</script>";
  }else{
    echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
  }
  }


  //savemess
  public function savemess(){
    if($this->session->userdata('level')==='2'){
    $nama_keperluan = $_POST['nama_keperluan']; 
    $qty = $_POST['qty']; 
    $kredit = $_POST['kredit']; 
    $kode_kwitansi = $_POST['kode_kwitansi']; 
    $tanggal_kwitansi = $_POST['tanggal_kwitansi']; 
    $status = 'Aktif';
    $statuskas = 'Mess';
    $bulan = substr($tanggal_kwitansi,5,-3);
    $tahun = substr($tanggal_kwitansi,2,-6);
    $kode_kwitansinew = "m".".".$kode_kwitansi.".".$bulan.".".$tahun;
  // echo $kode_kwitansinew;  

$data1 = array(
  'kode_kwitansi' => $kode_kwitansinew,
  'tanggal_kwitansi' => $tanggal_kwitansi,
  'statuskas' => $statuskas,
  'status' => $status
);
 $this->db->insert('kwitansi',$data1);

    $jum = count($nama_keperluan);
    for($i = 0; $i<$jum; $i++){
        $data = array(
        'kode_keperluan' => '',
        'kode_kwitansi' => $kode_kwitansinew,
        'nama_keperluan' => $_POST['nama_keperluan'][$i],
        'qty' => $_POST['qty'][$i],
        'kredit' => $_POST['kredit'][$i],
        'statusuang' => $_POST['statusuang'][$i]
        
      );
      //  print_r($data);
      //  echo '<br>';
     $this->db->insert('keperluan',$data);
    } 
    echo "<script>alert('Tambah Berhasil.'); location.href='".base_url("kwitansi")."';</script>";
  }else{
    echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
  }
  }

  //update
	function update($id){ 
   
    $tanggal_kwitansi = $_POST['tanggal_kwitansi'];
    $statuskas = $_POST['statuskas'];
    if($statuskas == "Kantor"){
      $kode_kwitansinew = $_POST['kode_kwitansi'];
    }else {
      $kode_kwitansi = $_POST['kode_kwitansi'];
      $kode_kwitansinew = "m.".$kode_kwitansi;
    }
		$data = array(
      'kode_kwitansi' => 	$kode_kwitansinew,
      'tanggal_kwitansi' => 	$tanggal_kwitansi,
      'statuskas' => 	$statuskas
		);
		print_r($data);
		$where = array(
			'id' => $id
		);
	
		// $this->Mkwitansi->update_data($where,$data,'kwitansi');
		// echo "<script>alert('Berhasil diubah.'); location.href='".base_url("kwitansi/edit/".$id)."';</script>";
	}
}
