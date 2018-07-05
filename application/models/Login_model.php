<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function checksession()
  {
    if ($this->session->userdata('logged_in') != 'OK') {
      redirect('login/index');
    }
  }

  public function checklogin()
  {
    $username=$this->input->post('username');
    $password=$this->input->post('password');

    $this->db->select('username, password, prefix_name_id, fname, lname, role_name, active');
    $this->db->from('persons');
    $this->db->where('username', $username);
    $this->db->where('password', md5($password));
    $query = $this->db->get();

    return $query;
    
    if ($query->num_rows() == 1) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }

}
