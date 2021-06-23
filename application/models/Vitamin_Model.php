<?php

class Vitamin_Model extends CI_model
{
    
    //GetAllVit
    public function getAllVitamin()
    {
        return $this->db->get('vitamin')->result_array();
    }

    //CekKodeVit
    public function cekkodevit()
    {
        $query = $this->db->query("SELECT MAX(Id_Vitamin) as Id_Vitamin from vitamin");
        $hasil = $query->row();
        return $hasil->Id_Vitamin;
    }

    public function tambah()
    {
        $data = [
            "Id_Vitamin" => $this->input->post('Id_Vitamin', true),
            "Nama_Vitamin" => $this->input->post('Nama_Vitamin', true),
            "Usia_Wajib_Vitamin" => $this->input->post('Usia_Wajib_Vitamin', true)

        ];
        $this->db->insert('Vitamin', $data);
    }
    

    //
    public function getVitaminDet($id)
    {
        return $this->db->get_where('vitamin', ['Id_Vitamin' => $id])->row_array();
    }

    //
    public function ubahVitamin()
    {
        $data = [
            "Nama_Vitamin" => $this->input->post('Nama_Vitamin', true),
            "Usia_Wajib_Vitamin" => $this->input->post('Usia_Wajib_Vitamin', true)

        ];
        $this->db->where('Id_Vitamin', $this->input->post('id'));
        $this->db->update('vitamin', $data);
    }

    // Hapus Data
    public function hapusVit($id)
    {
        $this->db->where('Id_Vitamin', $id);
        $this->db->delete('vitamin');
    }

    public function getVitaminDetail($id)
    {
        return $this->db->get_where('vitamin', ['Id_Vitamin' => $id])->row_array();
    }
}