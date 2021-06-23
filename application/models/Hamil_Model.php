<?php

class Hamil_Model extends CI_model
{
    
    //GetAllVit
    public function getalldata()
    {
        return $this->db->get('ibuhamil')->result_array();
    }
}