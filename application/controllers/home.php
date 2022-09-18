<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
	$this->load->view('index');
	
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[12]'
	);
	if($this->form_validation->run()) {
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		 $this->load->model('loginmodel');
		 $loginid = $this->loginmodel->isvalidate($username, $password);
		if(isset($loginid->id)) {
		
			$this->session->set_userdata('id', $loginid->id);
			$this->session->set_userdata('username', $loginid->username);
             return redirect('home/dashboard');
		}
		else {
			echo "Details not Match";
		}

	}
	else {
	
	echo form_error('username');
	echo  form_error('password');
	}
	}
	public function dashboard() {
	
		$this->load->view('dashboard');
		}
}
