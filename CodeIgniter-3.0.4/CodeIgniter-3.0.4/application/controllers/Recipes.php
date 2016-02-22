<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Recipe");
		$this->load->library("form_validation");
	}
	public function getRecipe()
	{
		
	}


}

