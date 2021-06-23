<?php

class Datang_Model extends CI_model
{
    
    //GetAllVit
    public function getalldata()
    {
        return $this->db->get('datang')->result_array();
    }

     //CekKodeVit
     public function cekkodedtg()
     {
         $query = $this->db->query("SELECT MAX(Id_Datang) as Id_Datang from datang");
         $hasil = $query->row();
         return $hasil->Id_Datang;
     }
 
     public function tambah()
     {
         $data = [
             "Id_Datang" => $this->input->post('Id_Datang', true),
             "Nama_KK" => $this->input->post('Nama_KK', true),
             "Tanggal_Lahir_KK" => $this->input->post('Tanggal_Lahir_KK', true),
             "Umur_KK" => $this->input->post('Umur_KK', true),
             "Nama_Istri" => $this->input->post('Nama_Istri', true),
             "Tanggal_Lahir_Istri" => $this->input->post('Tanggal_Lahir_Istri', true),
             "Umur_Istri" => $this->input->post('Umur_Istri', true),
             "Alamat_Datang" => $this->input->post('Alamat_Datang', true),
             "Rt_Datang" => $this->input->post('Rt_Datang', true),
             "Rw_Datang" => $this->input->post('Rw_Datang', true),
             "Desa_Datang" => $this->input->post('Desa_Datang', true),
             "Kecamatan_Datang" => $this->input->post('Kecamatan_Datang', true),
             "Kabupaten_Datang" => $this->input->post('Kabupaten_Datang', true),
             "Provinsi_Datang" => $this->input->post('Provinsi_Datang', true),
             "Jumlah_Jiwa_Lk" => $this->input->post('Jumlah_Jiwa_Lk', true),
             "Jumlah_Jiwa_Pr" => $this->input->post('Jumlah_Jiwa_Pr', true),
             "Jumlah_Anak_Lk" => $this->input->post('Jumlah_Anak_Lk', true),
             "Jumlah_Anak_Pr" => $this->input->post('Jumlah_Anak_Pr', true),
             "Kb" => $this->input->post('Kb', true),
             "Ks" => $this->input->post('Ks', true)
 
         ];
         $this->db->insert('datang', $data);
     }

     // Hapus Data
    public function hapus($id)
    {
        $this->db->where('Id_Datang', $id);
        $this->db->delete('datang');
    }

    public function edit()
    {
        $data = [
             "Nama_KK" => $this->input->post('Nama_KK', true),
             "Tanggal_Lahir_KK" => $this->input->post('Tanggal_Lahir_KK', true),
             "Umur_KK" => $this->input->post('Umur_KK', true),
             "Nama_Istri" => $this->input->post('Nama_Istri', true),
             "Tanggal_Lahir_Istri" => $this->input->post('Tanggal_Lahir_Istri', true),
             "Umur_Istri" => $this->input->post('Umur_Istri', true),
             "Alamat_Datang" => $this->input->post('Alamat_Datang', true),
             "Rt_Datang" => $this->input->post('Rt_Datang', true),
             "Rw_Datang" => $this->input->post('Rw_Datang', true),
             "Desa_Datang" => $this->input->post('Desa_Datang', true),
             "Kecamatan_Datang" => $this->input->post('Kecamatan_Datang', true),
             "Kabupaten_Datang" => $this->input->post('Kabupaten_Datang', true),
             "Provinsi_Datang" => $this->input->post('Provinsi_Datang', true),
             "Jumlah_Jiwa_Lk" => $this->input->post('Jumlah_Jiwa_Lk', true),
             "Jumlah_Jiwa_Pr" => $this->input->post('Jumlah_Jiwa_Pr', true),
             "Jumlah_Anak_Lk" => $this->input->post('Jumlah_Anak_Lk', true),
             "Jumlah_Anak_Pr" => $this->input->post('Jumlah_Anak_Pr', true),
             "Kb" => $this->input->post('Kb', true),
             "Ks" => $this->input->post('Ks', true)

        ];
        $this->db->where('Id_Datang', $this->input->post('id'));
        $this->db->update('datang', $data);
    }
}