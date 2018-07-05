<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
		$this->load->model('Login_model');
  }

  function index()
  {
		$this->Login_model->checksession();
		$this->load->view('welcome_message');
  }

}
