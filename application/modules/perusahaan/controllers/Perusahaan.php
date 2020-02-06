<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class perusahaan extends CI_Controller {


	public $folder = 'perusahaan/';
	
	// public function __construct()
	 public function __construct(){
    parent::__construct();
    $this->load->helper('my_helper');
    $this->load->model('Mperusahaan');
  }
	

//halaman index
public function index()
{
  if($this->session->userdata('level')==='1'){
    $data['office'] = $this->Mperusahaan->getoffice();
    $data['head'] 		= 'Data Perusahaan';
    $data['content'] 	= $this->folder.'default';
    $data['style'] 		= $this->folder.'style';
    $data['js'] 		= $this->folder.'js';
   // $data['modals'] 	= $this->folder.'modals';
    $this->load->view('template', $data);
  }else{
  echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
  }
}

function do_upload(){
  $config['upload_path']="./assets/plugins/images";
  $config['allowed_types']='gif|jpg|png';
  $config['encrypt_name'] = TRUE;
   
  $this->load->library('upload',$config);
  if($this->upload->do_upload("logo")){
      $data = array('upload_data' => $this->upload->data());
      $id= $this->input->post('id');
      $nama_perusahaan= $this->input->post('nama_perusahaan');
      $logo= $data['upload_data']['file_name']; 
  }

  $data = array(
    'nama_perusahaan' => $nama_perusahaan,
    'logo' => $logo
  );
  $where = array(
   		'id' => $id
       );
       
  $this->Mperusahaan->update_data($where,$data,'perusahaan');
 		echo "<script>alert('Berhasil diubah.'); location.href='".base_url("perusahaan")."';</script>";
  }


//   //edit
//   function edit($id){
//     if($this->session->userdata('level')==='2'){
//      // $data['kwitansi'] = $this->Mkwitansi->edit_data($id);
//       $data['kep'] = $this->Mperusahaan->getperusahaan($id);
//       $data['head'] 		= 'Edit Data perusahaan';
//       $data['js'] 		= $this->folder.'js';
//       //$data['modals'] 		= $this->folder.'modals';
//       $data['content'] 	= $this->folder.'edit';
//       //print_r($data['perusahaan']);
//       $this->load->view('template',$data);
//     }else{
//       echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
//     }
//   }
  
//   //delete
//   function delete($id){
//     if($this->session->userdata('level')==='2'){
//       $where = array('kode_perusahaan' => $id);
//       $this->Mperusahaan->delete_data($where,'perusahaan');
//       echo "<script>alert('Hapus Berhasil.'); location.href='".base_url("kwitansi")."';</script>";
//     }else{
//       echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
//     }
//   }

 

//   //savemess
//   public function save(){
//     if($this->session->userdata('level')==='2'){
//    $kode_kwitansi = $_POST['kode_kwitansi'];
//     $nama_perusahaan = $_POST['nama_perusahaan']; 
//     $qty = $_POST['qty']; 
//     $kredit = $_POST['kredit']; 
//     $statusuang = 'UangKantor';


//     $jum = count($nama_perusahaan);
//     for($i = 0; $i<$jum; $i++){
//         $data = array(
//         'kode_perusahaan' => '',
//         'kode_kwitansi' => $kode_kwitansi,
//         'nama_perusahaan' => $_POST['nama_perusahaan'][$i],
//         'qty' => $_POST['qty'][$i],
//         'kredit' => $_POST['kredit'][$i],
//         'statusuang' => $statusuang
        
//       );
//         // print_r($data);
//         // echo '<br>';
//     $this->db->insert('perusahaan',$data);
//     } 
//     echo "<script>alert('Tambah Berhasil.'); location.href='".base_url("kwitansi")."';</script>";
//   }else{
//     echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
//   }
//   }

//  // update
// 	function update(){ 
//     $id = $_POST['kode_perusahaan'];
//     	$nama_perusahaan = $_POST['nama_perusahaan'];
//       $qty = $_POST['qty'];
//      	$kredit = $_POST['kredit'];

// 		$data = array(
//       'nama_perusahaan' => 	$nama_perusahaan,
//       'qty' => 	$qty,
//       'kredit' => 	$kredit
// 		);
// 		print_r($data);
// 		$where = array(
// 			'kode_perusahaan' => $id
// 		);
	
// 		$this->Mperusahaan->update_data($where,$data,'perusahaan');
// 		echo "<script>alert('Berhasil diubah.'); location.href='".base_url("kwitansi")."';</script>";
// 	}
}
