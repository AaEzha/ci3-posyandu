<?php

class Vaksin_Model extends CI_model
{
    //Variabel
    public $Id_Vaksin;
    public $Nama_Vaksin;
    public $Usia_Wajib_Vaksin;

    //Construct
    public function __construct()
    {
        $this->load->database();
    }

    //GetAllVit
    public function getAllVaksin()
    {
        return $this->db->get('vaksin')->result_array();
    }


    //CekKodeVit
    public function cekkodevak()
    {
        $query = $this->db->query("SELECT MAX(Id_Vaksin) as Id_Vaksin from vaksin");
        $hasil = $query->row();
        return $hasil->Id_Vaksin;
    }

    public function tambah()
    {
        $data = [
            "Id_Vaksin" => $this->input->post('Id_Vaksin', true),
            "Nama_Vaksin" => $this->input->post('Nama_Vaksin', true),
            "Usia_Wajib_Vaksin" => $this->input->post('Usia_Wajib_Vaksin', true)

        ];
        $this->db->insert('vaksin', $data);
    }
 
    //Edit
    public function getVaksinModel($id)
    {
        return $this->db->get_where('vaksin', ['Id_Vaksin' => $id])->row_array();
    }

    //
    public function ubahVaksin()
    {
        $data = [
            "Nama_Vaksin" => $this->input->post('Nama_Vaksin', true),
            "Usia_Wajib_Vaksin" => $this->input->post('Usia_Wajib_Vaksin', true)

        ];
        $this->db->where('Id_Vaksin', $this->input->post('id'));
        $this->db->update('vaksin', $data);
    }

    // Hapus Data
    public function hapusvak($id)
    {
        $this->db->where('Id_Vaksin', $id);
        $this->db->delete('vaksin');
    }

    public function getVaksinDetail($id)
    {
        return $this->db->get_where('vaksin', ['Id_Vaksin' => $id])->row_array();
    }
}