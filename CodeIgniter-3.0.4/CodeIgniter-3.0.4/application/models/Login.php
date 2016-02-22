<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

	public function registerUser($post)
	{
		$query = "INSERT INTO users(first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?,NOW(), NOW())";
		$values = array($post['first_name'], $post['last_name'], $post['email'], $post['password']);
		$this->db->query($query, $values);
	}

	public function get_user($email){
		$query = "SELECT * FROM users WHERE email=?";
		$values = array($email);
		return $this->db->query($query, $values)->row_array();

	}
	

	public function check_password($post)
	{
		$query = "SELECT password FROM users WHERE email=?";
		$values = array($post['email']);
		$password = $this->db->query($query, $values)->row_array();

		if ($password['password'] == $post['password']) 
		{
			return true;
		}else{
			return false;
		}
	}
}