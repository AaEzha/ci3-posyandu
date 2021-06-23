<?php

class Anak_Model extends CI_model
{

    
    public function getAnak1()
    {
        return $this->db->get_where('anak', ['Status_Warga' => 'Warga Asli'])->result_array();
    }
    
    public function getAnak2()
    {
        return $this->db->get_where('anak', ['Status_Warga' => 'Warga Tamu'])->result_array();
    }

    //CekKodeVit
    public function cekkodeanak()
    {
        $query = $this->db->query("SELECT MAX(Id_Anak) as Id_Anak from anak");
        $hasil = $query->row();
        return $hasil->Id_Anak;
    }
    
    public function tambahAnak()
    {
        $data = [
            "Id_Anak" => $this->input->post('Id_Anak', true),
            "NIK" => $this->input->post('NIK', true),
            "Nama_Anak" => $this->input->post('Nama_Anak', true),
            "Tanggal_Lahir" => $this->input->post('Tanggal_Lahir', true),
            "Tempat_Lahir" => $this->input->post('Tempat_Lahir', true),
            "Jenis_Kelamin" => $this->input->post('Jenis_Kelamin', true),
            "Umur" => $this->input->post('Umur', true),
            "Anak_Ke" => $this->input->post('Anak_Ke', true),
            "Nama_Ibu" => $this->input->post('Nama_Ibu', true),
            "Nama_Ayah" => $this->input->post('Nama_Ayah', true),
            "Alamat" => $this->input->post('Alamat', true),
            "Rt" => $this->input->post('Rt', true),
            "Rw" => $this->input->post('Rw', true),
            "Desa" => $this->input->post('Desa', true),
            "Kecamatan" => $this->input->post('Kecamatan', true),
            "Kabupaten" => $this->input->post('Kabupaten', true),
            "Provinsi" => $this->input->post('Provinsi', true),
            "Status_Warga" => $this->input->post('Status_Warga', true)

        ];
        $this->db->insert('anak', $data);
    }
    

    public function hapusAnak($id)
    {
        $this->db->where('Id_Anak', $id);
        $this->db->delete('anak');
    }

    
    public function getAnakDetail($id)
    {
        return $this->db->get_where('anak', ['Id_Anak' => $id])->row_array();
    }
    
    public function getAnakDetail2($id)
    {
        return $this->db->get_where('anak', ['Id_Anak' => $id])->row_array();
    }

    public function ubahAnak()
    {
        $data = [
            "NIK" => $this->input->post('NIK', true),
            "Nama_Anak" => $this->input->post('Nama_Anak', true),
            "Tanggal_Lahir" => $this->input->post('Tanggal_Lahir', true),
            "Jenis_Kelamin" => $this->input->post('Jenis_Kelamin', true),
            "Tempat_Lahir" => $this->input->post('Tempat_Lahir', true),
            "Umur" => $this->input->post('Umur', true),
            "Anak_Ke" => $this->input->post('Anak_Ke', true),
            "Nama_Ibu" => $this->input->post('Nama_Ibu', true),
            "Nama_Ayah" => $this->input->post('Nama_Ayah', true),
            "Alamat" => $this->input->post('Alamat', true),
            "Rt" => $this->input->post('Rt', true),
            "Rw" => $this->input->post('Rw', true),
            "Desa" => $this->input->post('Desa', true),
            "Kecamatan" => $this->input->post('Kecamatan', true),
            "Kabupaten" => $this->input->post('Kabupaten', true),
            "Provinsi" => $this->input->post('Provinsi', true),
            "Status_Warga" => $this->input->post('Status_Warga', true)
        ];
        $this->db->where('Id_Anak', $this->input->post('id'));
        $this->db->update('anak', $data);
    }

    public function tambahAnak2()
    {
        $data = [
            "Id_Anak" => $this->input->post('Id_Anak', true),
            "NIK" => $this->input->post('NIK', true),
            "Nama_Anak" => $this->input->post('Nama_Anak', true),
            "Tanggal_Lahir" => $this->input->post('Tanggal_Lahir', true),
            "Tempat_Lahir" => $this->input->post('Tempat_Lahir', true),
            "Jenis_Kelamin" => $this->input->post('Jenis_Kelamin', true),
            "Umur" => $this->input->post('Umur', true),
            "Anak_Ke" => $this->input->post('Anak_Ke', true),
            "Nama_Ibu" => $this->input->post('Nama_Ibu', true),
            "Nama_Ayah" => $this->input->post('Nama_Ayah', true),
            "Alamat" => $this->input->post('Alamat', true),
            "Rt" => $this->input->post('Rt', true),
            "Rw" => $this->input->post('Rw', true),
            "Desa" => $this->input->post('Desa', true),
            "Kecamatan" => $this->input->post('Kecamatan', true),
            "Kabupaten" => $this->input->post('Kabupaten', true),
            "Provinsi" => $this->input->post('Provinsi', true),
            "Status_Warga" => $this->input->post('Status_Warga', true)

        ];
        $this->db->insert('anak', $data);
    }

    
    

}