<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {


	public $folder = 'cetak/';
	
	// public function __construct()
	 public function __construct(){
    parent::__construct();
    $this->load->helper('my_helper');
    $this->load->model('Mcetak');
    if($this->session->userdata('logged_in') != TRUE){
		echo "<script>alert('Anda Harus Login Terlebih Dahulu.'); location.href='".base_url("login")."';</script>";
	}
  }
	

	//halaman index
	// public function index()
	// {

		// $data['head'] 		= 'Hala';
  //  $data['cetak'] = $this->db->get_where('dokumen',['id'=> $id]);
		// $data['content'] 	= $this->folder.'default';
	//	$data['style'] 		= $this->folder.'style';
   // $data['js'] 		= $this->folder.'js';
   // $data['modals'] 		= $this->folder.'modals';
  //     $this->load->view('default', $data);
   
  // }

public function pdf($id){
	if($this->session->userdata('level')==='2' or $this->session->userdata('level')==='3'){
$data['head']   = 'Laporan';
$data['cetak']  = $this->Mcetak->getdok($id);
$data['kantor'] = $this->Mcetak->getkantor($id);
$data['mess']   = $this->Mcetak->getmess($id);
$data['mess1']   = $this->Mcetak->getmesskantor($id);
$data['mess2']   = $this->Mcetak->getmessbapak($id);
$data['sisa']   = $this->Mcetak->getsisakas($id);
$data['tf']   = $this->Mcetak->gettotaltf($id);


 $this->load->view('default',$data);

//  // Get output html
 	$html = $this->output->get_output();
        
 	// Load pdf library
 	$this->load->library('Pdf');
	
 	// Load HTML content
 	$this->pdf->loadHtml($html);
	
 	// (Optional) Setup the paper size and orientation
 	$this->pdf->setPaper('A4', 'potrait');
	
 	// Render the HTML as PDF
 	$this->pdf->render();

// Output the generated PDF (1 = download and 0 = preview)
	$this->pdf->stream($id."-dokumen.pdf", array("Attachment"=>0));
}else{
	echo "<script>alert('Anda Tidak Memiliki Hak Akses Untuk Data Tersebut.'); location.href='".base_url("dashboard")."';</script>";
}
}


}
