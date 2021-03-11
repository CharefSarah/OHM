<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cars_Controllers extends CI_Controller
{
  public function index()
  {
  //  $this->load->helper('link_tag');
    $this->load->helper('url');
    $this->load->view('Cars_view');
  }
}