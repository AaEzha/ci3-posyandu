<?php

class Lahir_Model extends CI_model
{
    
    //GetAllVit
    public function getalldata()
    {
        return $this->db->get('melahirkan')->result_array();
    }

     //CekKodeVit
     public function cekkodelhr()
     {
         $query = $this->db->query("SELECT MAX(Id_Lahir) as Id_Lahir from melahirkan");
         $hasil = $query->row();
         return $hasil->Id_Lahir;
     }
 
     public function tambah()
     {
         $data = [
             "Id_Lahir" => $this->input->post('Id_Lahir', true),
             "Nama_Suami" => $this->input->post('Nama_Suami', true),
             "Umur_Suami" => $this->input->post('Umur_Suami', true),
             "Nama_Istri" => $this->input->post('Nama_Istri', true),
             "Umur_Istri" => $this->input->post('Umur_Istri', true),
             "Alamat" => $this->input->post('Alamat', true),
             "Rt" => $this->input->post('Rt', true),
             "Rw" => $this->input->post('Rw', true),
             "Desa" => $this->input->post('Desa', true),
             "Kecamatan" => $this->input->post('Kecamatan', true),
             "Kabupaten" => $this->input->post('Kabupaten', true),
             "Provinsi" => $this->input->post('Provinsi', true),
             "Nama_Bayi" => $this->input->post('Nama_Bayi', true),
             "Tanggal_Lahir_Bayi" => $this->input->post('Tanggal_Lahir_Bayi', true),
             "Jenis_Kelamin_Bayi" => $this->input->post('Jenis_Kelamin_Bayi', true),
             "Anak_Ke" => $this->input->post('Anak_Ke', true)
 
         ];
         $this->db->insert('melahirkan', $data);
     }

     // Hapus Data
    public function hapus($id)
    {
        $this->db->where('Id_Lahir', $id);
        $this->db->delete('melahirkan');
    }

    public function getlahirdetail($id)
    {
        return $this->db->get_where('melahirkan', ['Id_Lahir' => $id])->row_array();
    }

    public function edit()
    {
        $data = 
        [
             "Nama_Suami" => $this->input->post('Nama_Suami', true),
             "Umur_Suami" => $this->input->post('Umur_Suami', true),
             "Nama_Istri" => $this->input->post('Nama_Istri', true),
             "Umur_Istri" => $this->input->post('Umur_Istri', true),
             "Alamat" => $this->input->post('Alamat', true),
             "Rt" => $this->input->post('Rt', true),
             "Rw" => $this->input->post('Rw', true),
             "Desa" => $this->input->post('Desa', true),
             "Kecamatan" => $this->input->post('Kecamatan', true),
             "Kabupaten" => $this->input->post('Kabupaten', true),
             "Provinsi" => $this->input->post('Provinsi', true),
             "Nama_Bayi" => $this->input->post('Nama_Bayi', true),
             "Tanggal_Lahir_Bayi" => $this->input->post('Tanggal_Lahir_Bayi', true),
             "Jenis_Kelamin_Bayi" => $this->input->post('Jenis_Kelamin_Bayi', true),
             "Anak_Ke" => $this->input->post('Anak_Ke', true)
        ];
        $this->db->where('Id_Lahir', $this->input->post('id'));
        $this->db->update('melahirkan', $data);
    }
}