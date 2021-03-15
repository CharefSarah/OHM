
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Connexion_Client_controllers extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Si la session a déja un id on redirige vers private_area qui est ma page de profile. 
        if ($this->session->userdata('id')) {
            redirect('Profil_Client_controllers');
        }
        
        $this->load->library('form_validation');
        // Load encrypt bug a cause du passage a CI3 visiblement mais vous pouvez directement le prendre et le coller chez vous.
        // C'est dans Systeme/Libraries/encrypt.php
        $this->load->library('Encrypt');
        $this->load->model('Connexion_Client_model');
    }

    function index()
    {
        $this->load->view('Connexion_Client_view');
    }

    function validation()
    {
        // On check les deux champ, Trim sert a enlever les espaces inutiles avant et aprés un string
        $this->form_validation->set_rules('email', 'email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            // La fonction can_login est dans login_model.php. Elle sert a comparé l'input et la DB.
            $result = $this->Connexion_Client_model->can_login($this->input->post('email'));
            if ($result == '') {
                // Si c'est bon on redirige vers la page de profile
                redirect('Profil_Client_area');
            } else {
                // Sinon on renvoi a la page de login avec un message d'erreur que j'ai pas réussi a faire marcher. Mais normalement y'en avais un.
                $this->session->set_flashdata('message', $result);
                redirect('Connexion_Client_controllers');
            }
        } else {
            $this->index();
        }
    }
}

?>