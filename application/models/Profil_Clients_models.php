<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_Clients_controllers extends CI_Controller
{
  public function index()
  {
  //  $this->load->helper('link_tag');
    $this->load->helper('url');
    $this->load->model('Profil_Client_models');
   // Creation d'un tableau $data avec les données
   $data["fetch_data"] = $this->Form_Register_models->fetch_data();
   // Chargement de la vue
   $this->load->view("Profil_Clientr_view", $data);
}
public function form_validation()
{
   // Chargement lib Form Validation pour le controle de champs
   $this->load->library('form_validation');
   // On traite et valide chaque champ
   // Alpha = que des lettres.
   $this->form_validation->set_rules("lastname", "lastname", 'required');
   $this->form_validation->set_rules("firstname", "firstname", 'required');
   $this->form_validation->set_rules("adress", "adress", 'required');
   $this->form_validation->set_rules("zipcode", "zipcode", 'required');
   $this->form_validation->set_rules("city", "city", 'required');
   $this->form_validation->set_rules("mail", "mail", 'required');
   $this->form_validation->set_rules("phone", "phone", 'required');
   $this->form_validation->set_rules("birthdate", "birthdate", 'required');
   $this->form_validation->set_rules("licence", "licence", 'required');
   $this->form_validation->set_rules("password", "password", 'required');
   $this->form_validation->set_rules("passwordVerif", "passwordVerif", 'required');

   if ($this->form_validation->run()) {
       //true  
       // On charge le modele 
       $this->load->model("Profil_Clients_models");

       // On rempli le tableau data avec les inputs
       $data = array(
           "lastname"     => $this->input->post("lastname"),
           "firstname"     => $this->input->post("firstname"),
           "adress"          => $this->input->post("adress"),
           "zipcode"     => $this->input->post("zipcode"),
           "city"     => $this->input->post("city"),
           "mail"     => $this->input->post("mail"), 
           "telephone"          => $this->input->post("phone"),
           "birthdate"     => $this->input->post("birthdate"),
           "driving_licence"     => $this->input->post("licence"),
           "password"     => $this->input->post("password"),
          
       );


       if ($this->input->post("update")) {
           $this->add_patient_models->update_data($data, $this->input->post("hidden_id"));
           redirect(base_url() . "a/updated");
       }
       if ($this->input->post("insert")) {
           $this->Form_Register_models->insert_data($data);
           redirect(base_url() . "Form_Register_controllers/inserted");
       }
   } else {
       //false  
       $this->index();
   }
}
public function inserted()
{
   $this->index();
}
public function delete_data()
{
   // Fonction de suprression
   $id = $this->uri->segment(3);
   $this->load->model("Form_Register_model");
   $this->add_patient_models->delete_data($id);
   redirect(base_url() . "Form_Register_Controller/deleted");
}
public function deleted()
{
   $this->index();
}
public function update_data()
{
   //Fonction d'update
   $user_id = $this->uri->segment(3);
   $this->load->model("add   Form_register_model");
   $data["user_data"] = $this->Form_Register_models->fetch_single_data($user_id);
   $data["fetch_data"] = $this->Form_Register_models->fetch_data();
   $this->load->view("Form_Register_view", $data);

}
public function updated()
{
   $this->index();
}
}
