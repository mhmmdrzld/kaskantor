<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {

    public $folder = 'dashboard/';
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('my_helper');
      $this->load->model('Mdashboard');
    }


    function index(){
        //Allowing akses to admin only
          if($this->session->userdata('level')==='1' or $this->session->userdata('level')==='2' or $this->session->userdata('level')==='3'){
            $data['dokumen'] = $this->Mdashboard->getdok();
            $data['user'] = $this->Mdashboard->getuser();
            $data['kwitansi'] = $this->Mdashboard->getkwi();
            $data['keperluan'] = $this->Mdashboard->getkep();
            $data['sisakas'] = $this->Mdashboard->getsisakas();
            
            $data['content'] 	= $this->folder.'default';
            $data['modals'] 		= $this->folder.'modals';
            $data['style'] 		= $this->folder.'style';
            $data['js'] 		= $this->folder.'js';
            $data['head'] 		= 'Dashboard';
            $this->load->view('template',$data);
          }
          else{
            echo "<script>alert('Anda harus login.'); location.href='".base_url("login")."';</script>";
          }
     
      }
     
      // function akuntan(){
      //   //Allowing akses to staff only
        
      //   if($this->session->userdata('level')==='2'){
      //       $data['head'] 		= 'Dashboard';
      //       $data['dash'] = $this->Mdoashboard->countdokumen();
      //       print_r($data['dash']);
      //       $data['content'] 	= $this->folder.'default';
      //     $this->load->view('template',$data);
      //   }else{
      //       echo "<script>alert('Anda harus login'); location.href='".base_url("login")."';</script>";
      //   }
      // }
}