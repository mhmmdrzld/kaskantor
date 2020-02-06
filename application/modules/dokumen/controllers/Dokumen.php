<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

	
	
	public $folder = 'dokumen/';
	
	// public function __construct()
	 public function __construct(){
    parent::__construct();
		$this->load->helper('my_helper');
		$this->load->model('Mdokumen');
		if($this->session->userdata('logged_in') != TRUE){
			echo "<script>alert('Anda Harus Login Terlebih Dahulu.'); location.href='".base_url("login")."';</script>";
		}
  }


	//halaman index
	public function index()
	{
		if($this->session->userdata('level')==='2' or $this->session->userdata('level')==='3'){
    $data['dokumen'] = $this->Mdokumen->getAll();
    $data['kantor'] = $this->Mdokumen->getkantor();
    $data['mess'] = $this->Mdokumen->getmess();
		$data['head'] 		= 'Data Dokumen';
		$data['content'] 	= $this->folder.'default';
		$data['style'] 		= $this->folder.'style';
		$data['js'] 		= $this->folder.'js';
    $data['modals'] 	= $this->folder.'modals';
		$this->load->view('template', $data);
	}else{
		echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
}
	}

	//delete
  function delete($id){
		$where = array('id' => $id);
		$this->Mdokumen->delete_data($where,'dokumen');
		echo "<script>alert('Hapus Berhasil.'); location.href='".base_url("dokumen")."';</script>";
  }

	//savekantor
   public function save(){
		 $kode_dokumen = $_POST['kode_dokumen']; 
		 $tanggal_dokumen = $_POST['tanggal_dokumen']; 
		 $kwitansi = $_POST['pilih'];
		 $bulan = getromawi(substr($tanggal_dokumen,5,-3));
		 $tahun = substr($tanggal_dokumen,0,-6);
		 $kode_dokumennew = $kode_dokumen."/KAS/GEOINFO/".$bulan."/".$tahun;
		 $nama_akuntan =$this->session->userdata("nama");
		 $waktu = date('H:i:s');

$data1 = array(
	'kode_dokumen' => $kode_dokumennew,
	'nama_akuntan' => $nama_akuntan,
	'waktu' => $waktu,
  'tanggal_dokumen' => $tanggal_dokumen
);


  // print_r(substr($waktu,0,-3));
	//   echo '<br>';
 $this->db->insert('dokumen',$data1);

	$jum = count($kwitansi);
   // echo $jum;
    for($i = 0; $i<$jum; $i++){
        $data = array(
		'status' => 'Tidak Aktif',
		'kode_dokumen' => $kode_dokumennew
      );
        //  print_r($data);
		//  echo '<br>';
	 $this->db->where('id', $kwitansi[$i]);
    $this->db->update('kwitansi',$data);
    } 
 redirect('dokumen');
	}
	
	  //edit
		function edit($id){
			if($this->session->userdata('level')==='2'){
				$data['dok'] = $this->Mdokumen->edit_data($id);
				$data['kwi'] = $this->Mdokumen->getkwitansi($id);
				//print_r($data['kwi']);
			//	$data['kep'] = $this->Mkeperluan->getkeperluan($id);
				$data['head'] 		= 'Edit Data Dokumen';
				$data['js'] 		= $this->folder.'js';
				//$data['modals'] 		= $this->folder.'modals';
				$data['content'] 	= $this->folder.'edit';
				//print_r($data['keperluan']);
				$this->load->view('template',$data);
			}else{
				echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
			}
		}

		//update
	function update($id){ 
    $kode_dokumen = $_POST['kode_dokumen'];
    $tanggal_dokumen = $_POST['tanggal_dokumen'];
	
		$data = array(
      'kode_dokumen' => 	$kode_dokumen,
			'tanggal_dokumen' => 	$tanggal_dokumen
		);
		//print_r($data1);
		$where = array(
			'id' => $id
		);
	
		$this->Mdokumen->update_data($where,$data,'dokumen');
		echo "<script>alert('Berhasil diubah.'); location.href='".base_url("dokumen")."';</script>";
	}
}
