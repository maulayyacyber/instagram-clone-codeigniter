<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		//buat variabel data array
		$data = array(
			'title' => 'Register - Instagram'
		);
		
		//load view dengan data
		$this->load->view('part/header', $data);
		$this->load->view('layout/web/register/data');
		$this->load->view('part/footer');
	}

	public function save()
	{
		//get data dari form
		$insert = array(
			'full_name' => $this->input->post("full_name"),
			'username' 	=> $this->input->post("username"),
			'password' 	=> md5($this->input->post("password")),
			'created_at'=> date("Y-m-d H:i:s"), 
			'updated_at'=> date("Y-m-d H:i:s")
		);
		//insert data via model
		$this->model_instagram->save_register($insert);
		//redirect
		redirect("login/");
	}

}
