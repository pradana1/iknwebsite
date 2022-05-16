<?php 

class Dokumentasi_kavling extends CI_Controller {
	public function index() {
		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('dokumentasi_kavling');
		$this->load->view('template/footer');
	}
}

?>