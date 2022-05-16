<?php 

class Dokumentasi_ptikn extends CI_Controller {
	public function index() {
		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('dokumentasi_ptikn');
		$this->load->view('template/footer');
	}
}

?>