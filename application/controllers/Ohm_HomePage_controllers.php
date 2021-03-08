<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ohm_HomePage_controllers extends CI_Controller
{
  public function index()
  {
  //  $this->load->helper('link_tag');
    $this->load->helper('url');
    $this->load->view('ohm_homepage_view');
  }
}
