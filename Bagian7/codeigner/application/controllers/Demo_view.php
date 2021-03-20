<?php
class Demo_view extends CI_Controller{
	public function index(){
		$this->load->view('header');
		$this->load->view('contentview');
		$this->load->view('footerview');


	}
}
?>