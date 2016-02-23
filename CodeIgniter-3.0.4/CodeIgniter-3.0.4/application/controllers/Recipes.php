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
		$ingredients = $this->input->post();
		$string = "";
		for($i=0; $i<5; $i++) {

			$ingredient=$ingredients['ingredient_'.$i];
			$ingredient=trim($ingredient);
			$ingredient=str_replace(" ", "%20", $ingredient);
			$string .= $ingredient;
			$string .= ",";

		}

		$url = "http://food2fork.com/api/search?key=0f3c05d712303cacf72b6230c8f9e793&q=" . $string;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
		$data = curl_exec($ch);
		curl_close($ch);
		// echo json_encode($data);
		$this->load->view('recipe_response', array(
			"data" => $data,
			"userinfo" => $this->session->userdata("userinfo")
			));
	}

	public function load_recipe_response()
	{
		
	}
}

