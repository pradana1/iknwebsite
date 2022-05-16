<?php 

class Dokumentasi_video extends CI_Controller {
	public function index() {
		
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('dokumentasi_video');
		$this->load->view('template/footer');
	}
}

?>