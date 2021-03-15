
<?php
class Form_Register_models extends CI_Model
{
    function insert($data)
    {
        // Insertion, comme d'hab.
        $this->db->insert('clients', $data);
        return $this->db->insert_id();
    }
 
}

?>
