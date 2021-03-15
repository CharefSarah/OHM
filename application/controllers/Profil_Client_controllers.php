
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_Client_Controllers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            // Si la session N'as PAS d'id on redirige vers le login pour eviter d'avoir acces a un profil vide.
            redirect('Connexion_Client_Controllers');
        }
        $this->load->library('form_validation');
        $this->load->model('Profil_Clients_models');
    }



    function index()
    {

        $this->load->helper('url');
        $this->load->model("Profil_Clients_models");
        // Comme dans les autres controller on utilise un tableau de data.
        $data["fetch_single_data"] = $this->Profil_Clients_models->fetch_single_data($this->session->userdata('id'));
        $this->load->view('Profil_Client_view', $data);
    }

    function logout()
    {
        // Fonction de disconnect qui vide TOUT les userdate, on peut le faire champ par champ mais c'est long pour rien.
        $data = $this->session->all_userdata();
        foreach ($data as $row => $rows_value) {
            $this->session->unset_userdata($row);
        }
        // On redirige vers la page de login aprés déco.
        redirect('Connexion_Client_controllers');
    }


    function validation()
    {
        // On valide tout les champ, faut juste que trouve chaque condition pour chaque champ pour l'instant c'est juste required et trim.
        $this->form_validation->set_rules("lastname", "lastname", 'required');
        $this->form_validation->set_rules("firstname", "firstname", 'required');
        $this->form_validation->set_rules("adress", "adress", 'required');
        $this->form_validation->set_rules("zipcode", "zipcode", 'required');
        $this->form_validation->set_rules("city", "city", 'required');
        $this->form_validation->set_rules("phone", "phone", 'required');
        $this->form_validation->set_rules("birthdate", "birthdate", 'required');
        $this->form_validation->set_rules("licence", "licence", 'required');
   
        

        if ($this->form_validation->run()) {
            // On rempli notre tableau data avec les inputs pour modifier ( mais ca marche pas et faut que je vois pourquoi. )
            $data = array(
                'Lastname'  => $this->input->post('lastname'),
                'Firstname'  => $this->input->post('firstname'),
                'CITY' => $this->input->post('city'),
                'TELEPHONE' => $this->input->post('telephone'),
                'ZIPCODE' => $this->input->post('zipCode'),
                'Adress' => $this->input->post('adresse'),
                'BIRTHDATE' => $this->input->post('birthdate'),
                'DRIVING_LICENCE' => $this->input->post('licence'),
                
            );
            $id = $this->Profil_Clients_models->update_data($data, $this->session->userdata('ID'));

            if ($this->input->post("update")) {
                $this->Form_Register_models->update_data($data, $this->input->post("hidden_id"));
                redirect(base_url() . "Profil_Client_view/updated");
            }
        } else {
            $this->index();
        }
    }

    public function update_data()
    {
        //Fonction d'update
        $this->load->model("Profil_Clients_models");
        $data["user_data"] = $this->Profil_Clients_models->fetch_single_data($this->session->userdata('ID'));
        $data["fetch_data"] = $this->Profil_Clients_models->fetch_data();
        $this->load->view("Profil_Client_view", $data);
    }
    
}

?>
