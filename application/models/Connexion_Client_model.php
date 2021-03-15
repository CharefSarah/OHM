
<?php
class Connexion_Client_model extends CI_Model
{

    function can_login($email)
    {
        // SELECT * FROM client WHERE client.mail = $email, $email etant le mail de l'input qu'on a passé en parametre
        $this->db->where('MAIL', $email);
        $query = $this->db->get('clients');
        // SI la requete renvoi quelque chose :
        if ($query->num_rows() > 0) {
            // On range le resultat de la query dans des row
            foreach ($query->result() as $row) {
                // On decode le mot de passe 
           

                //Si le password du parametre est identique a celui decodé on set les données de la session par rapport a 
                // ceux du compte qui s'est connecté
             
                    $this->session->set_userdata('id', $row->ID);
                    $this->session->set_userdata('firstname',$row->Firstname);
                    $this->session->set_userdata('MAIL',$row->MAIL);
var_dump($row);
             
                    // Si le password est eronné, message d'erreur
                    return 'Wrong Password';
                
            }
        } else {
            // Si la query ne renvoi rien c'est que le mail est faux.
            // Message d'erreur :
            return 'Wrong Email Address';
        }
    }
}

?>
