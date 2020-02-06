<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('default');
	}
	

	function auth(){
		$username    = $this->input->post('username',TRUE);
		$password = md5($this->input->post('password',TRUE));
		$validate = $this->m_login->validate($username,$password);
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
					$nama  = $data['nama'];
					$jabatan  = $data['jabatan'];
					$email = $data['email'];
					$level = $data['level'];
					$id = $data['id'];
			$datasession = array(
				'username'  => $username,
				'id'  => $id,
				'email'     => $email,
				'level'     => $level,
				'jabatan'     => $jabatan,
				'nama'     => $nama,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($datasession);
			// access login for admin
			if($level === '1'){
				//redirect('dashboard');
				echo "<script>alert('Login berhasil!'); location.href='".base_url("dashboard")."';</script>";
			}elseif($level === '3'){
				//redirect('dashboard');
				echo "<script>alert('Login berhasil!'); location.href='".base_url("dashboard")."';</script>";
			}else{
			//	redirect('dashboard/akuntan');
				echo "<script>alert('Login berhasil!'); location.href='".base_url("dashboard")."';</script>";
			}
		}else{
			echo $this->session->set_flashdata('flasherror','Username dan Password Salah!');
			redirect('login');
			//$this->index();
		}
		}

	function logout(){
		$this->session->sess_destroy();
		//redirect(base_url("login"));
		echo "<script>alert('Logout berhasil!'); location.href='".base_url("login")."';</script>";	
	}
}