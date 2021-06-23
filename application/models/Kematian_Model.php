<?php

class Kematian_Model extends CI_model
{
    
    //GetAllVit
    public function getalldata()
    {
        return $this->db->get('kematian')->result_array();
    }

     //CekKodeVit
     public function cekkodemt()
     {
         $query = $this->db->query("SELECT MAX(Id_Kematian) as Id_Kematian from kematian");
         $hasil = $query->row();
         return $hasil->Id_Kematian;
     }
 
     public function tambah()
     {
         $data = [
             "Id_Kematian" => $this->input->post('Id_Kematian', true),
             "Nama_Meninggal" => $this->input->post('Nama_Meninggal', true),
             "Tanggal_Lahir" => $this->input->post('Tanggal_Lahir', true),
             "Umur" => $this->input->post('Umur', true),
             "Tanggal_Meninggal" => $this->input->post('Tanggal_Meninggal', true),
             "Jenis_Kelamin" => $this->input->post('Jenis_Kelamin', true),
             "Alamat" => $this->input->post('Alamat', true),
             "Rt" => $this->input->post('Rt', true),
             "Rw" => $this->input->post('Rw', true),
             "Desa" => $this->input->post('Desa', true),
             "Kecamatan" => $this->input->post('Kecamatan', true),
             "Kabupaten" => $this->input->post('Kabupaten', true),
             "Provinsi" => $this->input->post('Provinsi', true),
             "Penyebab" => $this->input->post('Penyebab', true)
 
         ];
         $this->db->insert('kematian', $data);
     }

     // Hapus Data
    public function hapus($id)
    {
        $this->db->where('Id_Kematian', $id);
        $this->db->delete('kematian');
    }
}