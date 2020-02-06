<?php 

class Setting extends CI_Controller{


    public $folder = 'setting/';
	
	function __construct(){
		parent::__construct();		
		 $this->load->model('Msetting');
		 $this->load->helper('url');
		 if($this->session->userdata('logged_in') != TRUE){
			echo "<script>alert('Anda Harus Login Terlebih Dahulu.'); location.href='".base_url("login")."';</script>";
		}
	}

	//menampilkan halaman index
	function index(){
		$id = $this->session->userdata("id");
		$data['user'] = $this->Msetting->getuser($id);
		//print_r($data['user']);
		$data['head']       = 'Account Setting';
		$data['content']    = $this->folder.'default';
		$data['js']       = $this->folder.'js';
        $this->load->view('template', $data);
	}


	//update
	function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$jabatan = $this->input->post('jabatan');
	
		$data = array(
			'id' => $id,
			'nama' => $nama,
			'email' => $email,
			'username' => $username,
			'jabatan' => $jabatan,
			'password' => md5($password)
			
		);
		// print_r($data);
		$where = array(
			'id' => $id
		);
	
		$this->Msetting->update_data($where,$data,'user');
		echo "<script>alert('Berhasil diubah.'); location.href='".base_url("setting")."';</script>";
	}
	
}