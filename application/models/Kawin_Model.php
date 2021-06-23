<?php

class Kawin_Model extends CI_model
{
    
    //GetAllVit
    public function getalldata()
    {
        return $this->db->get('kawin')->result_array();
    }

     //CekKodeVit
     public function cekkodekwn()
     {
         $query = $this->db->query("SELECT MAX(Id_Kawin) as Id_Kawin from kawin");
         $hasil = $query->row();
         return $hasil->Id_Kawin;
     }
 
     public function tambah()
     {
         $data = [
             "Id_Kawin" => $this->input->post('Id_Kawin', true),
             "Nama_Suami" => $this->input->post('Nama_Suami', true),
             "Umur_Suami" => $this->input->post('Umur_Suami', true),
             "Pendidikan_Suami" => $this->input->post('Pendidikan_Suami', true),
             "Pekerjaan_Suami" => $this->input->post('Pekerjaan_Suami', true),
             "Alamat_Suami" => $this->input->post('Alamat_Suami', true),
             "Rt_Suami" => $this->input->post('Rt_Suami', true),
             "Rw_Suami" => $this->input->post('Rw_Suami', true),
             "Desa_Suami" => $this->input->post('Desa_Suami', true),
             "Kecamatan_Suami" => $this->input->post('Kecamatan_Suami', true),
             "Kabupaten_Suami" => $this->input->post('Kabupaten_Suami', true),
             "Provinsi_Suami" => $this->input->post('Provinsi_Suami', true),
             "Nama_Istri" => $this->input->post('Nama_Istri', true),
             "Umur_Istri" => $this->input->post('Umur_Istri', true),
             "Pendidikan_Istri" => $this->input->post('Pendidikan_Istri', true),
             "Pekerjaan_Istri" => $this->input->post('Pekerjaan_Istri', true),
             "Alamat_Istri" => $this->input->post('Alamat_Istri', true),
             "Rt_Istri" => $this->input->post('Rt_Istri', true),
             "Rw_Istri" => $this->input->post('Rw_Istri', true),
             "Desa_Istri" => $this->input->post('Desa_Istri', true),
             "Kecamatan_Istri" => $this->input->post('Kecamatan_Istri', true),
             "Kabupaten_Istri" => $this->input->post('Kabupaten_Istri', true),
             "Provinsi_Istri" => $this->input->post('Provinsi_Istri', true)
 
         ];
         $this->db->insert('kawin', $data);
     }

     // Hapus Data
    public function hapus($id)
    {
        $this->db->where('Id_Kawin', $id);
        $this->db->delete('kawin');
    }
}