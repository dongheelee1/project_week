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

		//var_dump($data);

		$php_data = json_decode($data, true);
		//var_dump($php_data['count']);
		$random_object = rand(0, $php_data['count']-1); //randomized object count

			//var_dump($php_data['recipes'][$random_object])


	if($php_data['count'] > 0){

		$this->session->set_userdata('data', $data);

		redirect('/recipes/refresh');

	}else{

		redirect('/home');
		

	}

	}
	public function refresh()
	{
		
		$this->load->view('recipe_response', 
			array("userinfo"=>$this->session->userdata('userinfo'), 'data'=>$this->session->userdata('data')));
	}

	public function redirectHome()
	{
		$this->load->view('home', array("userinfo"=>$this->session->userdata('userinfo')));
	}

	public function whyIsThisNecessary()
	{
		redirect('/recipes/resources');
	}

	public function resources()
	{
		$this->load->view('opening',
			array("userinfo"=>$this->session->userdata('userinfo'), 'data'=>$this->session->userdata('data')));
	}

}

