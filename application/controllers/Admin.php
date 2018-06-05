<?php

class Admin extends CI_Controller{

  public function index(){

    $this->load->view('templates/header');
    $this->load->view('admin/login');
    $this->load->view('templates/footer');
  }

  public function edit_content(){

    $this->load->view('templates/header');
		$this->load->view('editContent');
		$this->load->view('templates/footer');
  }
} ?>
