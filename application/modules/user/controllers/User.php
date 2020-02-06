<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	
	public $folder = 'user/';
	
	// public function __construct()
	 public function __construct(){
    parent::__construct();
		$this->load->helper('my_helper');
		$this->load->model('Muser');
		if($this->session->userdata('logged_in') != TRUE){
			echo "<script>alert('Anda Harus Login Terlebih Dahulu.'); location.href='".base_url("login")."';</script>";
		}
		
  }


	//halaman index
	public function index()
	{
		if($this->session->userdata('level')==='1'){
			$data['user'] = $this->Muser->getAll();
			$data['head'] 		= 'Data Pengguna';
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
	if($this->session->userdata('level')==='1'){
		$where = array('id' => $id);
		$this->Muser->delete_data($where,'user');
		echo "<script>alert('Hapus Berhasil.'); location.href='".base_url("user")."';</script>";
	}else{
		echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
	}
}
	
	//edit
  	function edit($id){
		if($this->session->userdata('level')==='1'){
			$data['pengguna'] = $this->Muser->getpengguna($id);
			$data['head'] 		= 'Edit Data Pengguna';
			$data['js'] 		= $this->folder.'js';
			$data['content'] 	= $this->folder.'edit';
			$data['style'] 		= $this->folder.'style';
		//print_r($data['pengguna']);
			$this->load->view('template',$data);
		}else{
			echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
		}
  	}

	//save
   public function save(){
		 $nama = $_POST['nama']; 
		 $email = $_POST['email']; 
		 $jabatan = $_POST['jabatan']; 
		 $username = $_POST['username']; 
		 $password = md5($_POST['password']); 
		 $level = $_POST['level']; 
		 
			$data1 = array(
				'nama' => 	$nama, 
				'email' => $email, 
				'jabatan' => $jabatan, 
				'username' => $username,
				'password' => $password, 
				'level' => $level 
			);
			// print_r($data1);
			// echo '<br>';
 		$this->db->insert('user',$data1);
		echo "<script>alert('Tambah Berhasil.'); location.href='".base_url("user")."';</script>";
	}
	
	//update
	function update(){
		$id = $_POST['id']; 
		$nama = $_POST['nama']; 
		$email = $_POST['email']; 
		$jabatan = $_POST['jabatan']; 
		$username = $_POST['username']; 
		$password = $_POST['password']; 
		$level = $_POST['level']; 
	
		$data = array(
			'id' => 	$id, 
			'nama' => 	$nama, 
			'email' => $email, 
			'jabatan' => $jabatan, 
			'username' => $username,
			'password' => $password, 
			'level' => $level 
		);
		//print_r($data1);
		$where = array(
			'id' => $id
		);
	
		$this->Muser->update_data($where,$data,'user');
		echo "<script>alert('Berhasil diubah.'); location.href='".base_url("user")."';</script>";
	}
}
