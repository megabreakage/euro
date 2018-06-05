<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()	{
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');
	}
	public function about(){
		$this->load->view('templates/header');
		$this->load->view('about');
		$this->load->view('templates/footer');
	}

	public function services(){
		$this->load->view('templates/header');
		$this->load->view('services');
		$this->load->view('templates/footer');
	}

	public function portfolio(){
		$this->load->view('templates/header');
		$this->load->view('portfolio');
		$this->load->view('templates/footer');
	}

	public function contact(){
		$this->load->view('templates/header');
		$this->load->view('contact');
		$this->load->view('templates/footer');
	}
}
