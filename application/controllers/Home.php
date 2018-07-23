<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		//buat variabel data array
		$data = array(
			'title' => 'Home - Instagram'
		);
		
		//load view dengan data
		$this->load->view('part/header', $data);
		$this->load->view('layout/web/home/data');
		$this->load->view('part/footer');
	}
}
