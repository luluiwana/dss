<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function index(){
	$this->load->view('login');
}
public function logout(){
	$this->session->unset_userdata('username');
	redirect('login/index');
}
public function masuk(){
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	if($email=="admin@admin.com" && $password=="admin"){
		$this->session->set_userdata('username', $email);
		redirect('home/index');
	}else{
		redirect('login/index');
	}
}
}
