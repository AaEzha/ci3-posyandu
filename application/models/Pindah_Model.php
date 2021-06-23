<?php

class Pindah_Model extends CI_model
{
    
    //GetAllVit
    public function getalldata()
    {
        return $this->db->get('pindah')->result_array();
    }

     //CekKodeVit
     public function cekkodepdh()
     {
         $query = $this->db->query("SELECT MAX(Id_Pindah) as Id_Pindah from pindah");
         $hasil = $query->row();
         return $hasil->Id_Pindah;
     }
 
     public function tambah()
     {
         $data = [
             "Id_Pindah" => $this->input->post('Id_Pindah', true),
             "Nama_KK_Pindah" => $this->input->post('Nama_KK_Pindah', true),
             "Tanggal_Lahir_KK_Pindah" => $this->input->post('Tanggal_Lahir_KK_Pindah', true),
             "Umur_KK_Pindah" => $this->input->post('Umur_KK_Pindah', true),
             "Nama_Istri_Pindah" => $this->input->post('Nama_Istri_Pindah', true),
             "Tanggal_Lahir_Istri_Pindah" => $this->input->post('Tanggal_Lahir_Istri_Pindah', true),
             "Umur_Istri_Pindah" => $this->input->post('Umur_Istri_Pindah', true),
             "Alamat_Pindah" => $this->input->post('Alamat_Pindah', true),
             "Rt_Pindah" => $this->input->post('Rt_Pindah', true),
             "Rw_Pindah" => $this->input->post('Rw_Pindah', true),
             "Desa_Pindah" => $this->input->post('Desa_Pindah', true),
             "Kecamatan_Pindah" => $this->input->post('Kecamatan_Pindah', true),
             "Kabupaten_Pindah" => $this->input->post('Kabupaten_Pindah', true),
             "Provinsi_Pindah" => $this->input->post('Provinsi_Pindah', true),
             "Jumlah_Jiwa_Lk_Pindah" => $this->input->post('Jumlah_Jiwa_Lk_Pindah', true),
             "Jumlah_Jiwa_Pr_Pindah" => $this->input->post('Jumlah_Jiwa_Pr_Pindah', true),
             "Jumlah_Anak_Lk_Pindah" => $this->input->post('Jumlah_Anak_Lk_Pindah', true),
             "Jumlah_Anak_Pr_Pindah" => $this->input->post('Jumlah_Anak_Pr_Pindah', true),
             "Kb" => $this->input->post('Kb', true),
             "Ks" => $this->input->post('Ks', true)
 
         ];
         $this->db->insert('pindah', $data);
     }

     // Hapus Data
    public function hapus($id)
    {
        $this->db->where('Id_Pindah', $id);
        $this->db->delete('pindah');
    }
}