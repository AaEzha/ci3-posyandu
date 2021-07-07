<?php

class Timbang_Model extends CI_model
{

	public function kode()
    {
        $query = $this->db->query("SELECT MAX(Id_Timbangan) as id from timbangan");
        $hasil = $query->row();
        return $hasil->id;
    }

    public function getAnak()
    {
        return $this->db->get('anak')->result_array();
    }

    public function getData($id)
    {
        return $this->db->get_where('anak', ['Id_Anak' => $id])->row_array();
    }

}
