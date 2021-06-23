<?php

class Timbang_Model extends CI_model
{

    public function getAnak()
    {
        return $this->db->get('anak')->result_array();
    }

    public function getData($id)
    {
        return $this->db->get_where('anak', ['No_Anak' => $id])->row_array();
    }

}