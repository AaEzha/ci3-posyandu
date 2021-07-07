<?php

class Hamil_Model extends CI_model
{
    public function kode()
    {
        $query = $this->db->query("SELECT MAX(Id_Kehamilan) as Id_Kehamilan from ibuhamil");
        $hasil = $query->row();
        return $hasil->Id_Kehamilan;
    }

    //GetAllVit
    public function getalldata()
    {
        return $this->db->get('ibuhamil')->result_array();
    }
}
