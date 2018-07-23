<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		//check session
		if($this->session->userdata("apps_id")){
			redirect("admin/dashboard");
		}

		//buat variabel data array
		$data = array(
			'title' => 'Login - Instagram'
		);
		
		//load view dengan data
		$this->load->view('part/header', $data);
		$this->load->view('layout/web/login/data');
		$this->load->view('part/footer');		
	}

	public function action()
	{
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$checking = $this->model_instagram->check_login(array('username' => $username), array('password' => $password));

		if($checking){

			foreach ($checking as $apps) {
                
                $session_data = array(
                    'apps_id' 		=> $apps->id_user,
                    'apps_username' => $apps->username,
                    'apps_nama' 	=> $apps->full_name,
                    'apps_foto' 	=> $apps->image
                );
                //set session userdata
                $this->session->set_userdata($session_data);
                redirect('admin/dashboard/');
			}
		}else{

			//buat variabel data array
			$data = array(
				'title' => 'Login - Instagram',
				'error'	=> 'Username atau Password Anda salah.'
			);
			
			//load view dengan data
			$this->load->view('part/header', $data);
			$this->load->view('layout/web/login/data');
			$this->load->view('part/footer');	

		}
	}

}
