<?php
class Cars_model extends CI_Model
{
    function insert_data($data)
    {
        // C'est pour insert, comme d'hab.
        $this->db->insert("voitures", $data);
    }

    function fetch_data()
    {
        // SELECT car.id, year, registration, km,...etc  FROM car 
        // JOIN la masse de truc. Faut juste faire gaffe au correspondance mais normalement si merise est bien fait c'est facile
        $this->db->select("*")
        ->from("voitures")
        ->join('categories', 'voitures.id_categories = categories.id')
        ->join('characteristics', 'voitures.id_caracteristiques = characteristics.id');
        $query = $this->db->get();
        return $query;
    }



    function fetch_single_data($id)
    {
        // SELECT * FROM car
        // WHERE id=$id
        $this->db->where("id", $id);
        $query = $this->db->get("voitures");
        return $query;
    }

}