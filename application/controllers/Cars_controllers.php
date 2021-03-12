<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cars_controllers extends CI_Controller
{
  public function index()
  {
  //  $this->load->helper('link_tag');
    $this->load->helper('url');
    $this->load->model("Cars_model");
    $data["fetch_data"]=$this->Cars_model->fetch_data();
    $this->load->view('Cars_view',$data);
}


}