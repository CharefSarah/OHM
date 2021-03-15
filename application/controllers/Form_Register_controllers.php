
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Form_Register_controllers extends CI_Controller
{

    //PAGE DE CREATION DE COMPTE
    public function __construct()
    {
        parent::__construct();
        // Si l'ID de session existe déja on redirige vers le profil
        if ($this->session->userdata('id')) {
            redirect('Profil_Client_Controllers');
        }

        $this->load->library('form_validation');
        // Load encrypt bug a cause du passage a CI3 visiblement mais vous pouvez directement le prendre et le coller chez vous.
        // C'est dans Systeme/Libraries/encrypt.php
        $this->load->library('encrypt');
        $this->load->model('Form_Register_models');
    }

    function index()
    {
        $this->load->view('Form_Register_view');
    }

    function validation()
    {
        // On verifie chaque champ, comme d'hab, il faut juste que je fasse une confirmation de mdp mais normalement y'as 
        // juste un truc a rajouté apres required pour verifier que ca match.
        $this->form_validation->set_rules('user_name', 'Name', 'required|trim');
        $this->form_validation->set_rules('user_firstname', 'Firstname', 'required|trim');
        $this->form_validation->set_rules('user_mail', 'Email Address', 'required|trim|valid_email|is_unique[clients.mail]');
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('user_city', 'City', 'trim|required');
        $this->form_validation->set_rules('user_zipCode', 'Zipcode', 'trim|required');
        $this->form_validation->set_rules('user_tel', 'Telephone', 'trim');
        $this->form_validation->set_rules('user_adresse', 'adresse', 'trim|required');
        $this->form_validation->set_rules('user_birthday', 'Birthday', 'trim|required');
        $this->form_validation->set_rules('user_drivingLicence', 'Driving Licence', 'trim|required');

        // On enregistre tout dans data MAIS ...
        if ($this->form_validation->run()) {
            // ... On enregistre une clé de verif qui sera utilisé pour le cryptage, elle est generé aléatoirement et stocké en DB
            $verification_key = md5(rand());
            // ... On enregistre uniquement la version crypté du MDP 
            $encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
            $data = array(
                'Lastname'  => $this->input->post('user_name'),
                'Firstname'  => $this->input->post('user_firstname'),
                'Mail'  => $this->input->post('user_mail'),
                'PASSWORD' => $encrypted_password,
                'TELEPHONE' => $this->input->post('user_tel'),
                'CITY' => $this->input->post('user_city'),
                'ZIPCODE' => $this->input->post('user_zipCode'),
                'Adress' => $this->input->post('user_adresse'),
                'BIRTHDATE' => $this->input->post('user_birthday'),
                'DRIVING_LICENCE' => $this->input->post('user_drivingLicence'),
                'verificationKey' => $verification_key
            );
            $id = $this->Form_Register_models->insert($data);

            // Redirection vers la page de profil une fois le profil créé
            redirect('Profil_Client_controllers');
        } else {
            $this->index();
        }
    }
}


?>