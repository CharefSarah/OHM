<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_Register_controllers extends CI_Controller
{
  public function index()
  {
  //  $this->load->helper('link_tag');
    $this->load->helper('url');
    $this->load->view('Form_Register_view');
  }
}
