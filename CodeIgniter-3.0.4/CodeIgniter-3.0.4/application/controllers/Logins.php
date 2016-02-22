<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logins extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Login");
		$this->load->library("form_validation");
	}

	public function index()
	{
	if (!($this->session->userdata("userinfo"))) {
		$this->load->view('login', array
			( "errors" => $this->session->flashdata("errors")));


	} else{
		$this->load->view('home',array
			("userinfo" => $this->session->userdata('userinfo')));
	}
}
	public function register()
	{	
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email['email']");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]|matches[confirm_password]");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|matches[password]");
		if ($this->form_validation->run() === FALSE) 
		{
			$this->session->set_flashdata("errors", validation_errors());
			redirect("/");
		}
		else{
				$this->Login->registerUser($this->input->post());
				$user = $this->Login->get_user($this->input->post("email"));
				$this->session->set_userdata("userinfo", $user);
				redirect("/");
			}
		
	 }
	
	 public function userLogin()
	 {
	 	$this->form_validation->set_rules("email", "Email", "trim|required|valid_email['email']");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if ($this->form_validation->run() === FALSE) 
		{
			$this->session->set_flashdata("errors", validation_errors());
			redirect("/");
		}else{
			$result = $this->Login->check_password($this->input->post());
			if($result){
				$user = $this->Login->get_user($this->input->post('email'));
				$this->session->set_userdata('userinfo', $user);

				redirect("/");

			}else{
				$this->session->set_flashdata("errors", "<p>Password does not match</p>");
				redirect("/");
			}
		}
	 }

	 	 public function logout()
	 {
	 	$this->session->unset_userdata("userinfo");
	 	redirect("/");
	 }
	}