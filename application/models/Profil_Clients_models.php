<?php
class Profil_Clients_models extends CI_Model
{
    function insert_data($data)
    {
        // INSERT into car VALUES $data.
        $this->db->insert("clients", $data);
    }

    function fetch_data()
    {
        // SELECT * FROM client
        $this->db->select("*")
             ->from("clients");
        $query = $this->db->get();
        return $query;
    }

    function fetch_single_data($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get("clients");
        return $query;
    }



    function update_data($data, $id)
    {
        // Bon celle la marche probablement pas du tout. 
        $this->db->where("id", $id);
        $this->db->update("clients", $data);
    }
}