<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Login_model');
  }

  function index()
  {
    $this->load->view('login/index');
  }

  public function check_login()
  {
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('login/index');
    }
    else {
      if($this->Login_model->checklogin() == TRUE) {
        $result = $this->Login_model->checklogin()->row();
        $result_username = $result->username;
        $result_prefix_name_id = $result->prefix_name_id;
        $newdata = array(
          'sess_username'=>$result_username,
          'sess_prefix_name_id'=>$result_prefix_name_id,
          'logged_in'=>'OK',
        );
        $this->session->set_userdata($newdata);
        redirect('welcome/index');
      }
      else {
        $this->load->view('login/index');
      }
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
  }

}
