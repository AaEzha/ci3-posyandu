<?php

class Akseptor_Model extends CI_model
{
    
    //GetAllData
    public function getData()
    {
        return $this->db->get('akseptor')->result_array();
    }

     //CekKodeVit
    public function cekkodeaks()
    {
        $query = $this->db->query("SELECT MAX(Id_Akseptor) as Id_Akseptor from akseptor");
        $hasil = $query->row();
        return $hasil->Id_Akseptor;
    }

    public function tambah()
    {
		$this->load->model('Mpenduduk');
		$suami = Mpenduduk::find($this->input->post('nik_suami', true));
		$istri = Mpenduduk::find($this->input->post('nik_istri', true));

        $data = [
            "Id_Akseptor" => $this->input->post('Id_Akseptor', true),
            "Nama_Suami" => $this->input->post('Nama_Suami', true),
            "Tanggal_Lahir_Suami" => $this->input->post('Tanggal_Lahir_Suami', true),
            "nik_suami" => $this->input->post('nik_suami', true),
            "nik_istri" => $this->input->post('nik_istri', true),
            "Umur_Suami" => umur($suami->Tanggal_Lahir),
            "Nama_Istri" => $this->input->post('Nama_Istri', true),
            "Tanggal_Lahir_Istri" => $this->input->post('Tanggal_Lahir_Istri', true),
            "Umur_Istri" => umur($istri->Tanggal_Lahir),
            "Alamat" => $this->input->post('Alamat', true),
            "Rt" => $this->input->post('Rt', true),
            "Rw" => $this->input->post('Rw', true),
            "Desa" => $this->input->post('Desa', true),
            "Kecamatan" => $this->input->post('Kecamatan', true),
            "Kabupaten" => $this->input->post('Kabupaten', true),
            "Provinsi" => $this->input->post('Provinsi', true),
            "Jumlah_Anak_Lk" => $this->input->post('Jumlah_Anak_Lk', true),
            "Jumlah_Anak_Pr" => $this->input->post('Jumlah_Anak_Pr', true),
            "Umur_Anak_Kecil" => $this->input->post('Umur_Anak_Kecil', true),
            "Tanggal_Pelkon" => $this->input->post('Tanggal_Pelkon', true),
            "Tempat_Pelkon" => $this->input->post('Tempat_Pelkon', true),
            "Metoda_Pelkon" => $this->input->post('Metoda_Pelkon', true),
            "Do_Dari" => $this->input->post('Do_Dari', true)
        ];
        $this->db->insert('akseptor', $data);
    }

    public function getdetail($id)
    {
        return $this->db->get_where('akseptor', ['Id_Akseptor' => $id])->row_array();
    }

    public function edit()
    {
        $data = [
            "Nama_Suami" => $this->input->post('Nama_Suami', true),
            "Tanggal_Lahir_Suami" => $this->input->post('Tanggal_Lahir_Suami', true),
            "Nama_Istri" => $this->input->post('Nama_Istri', true),
            "Tanggal_Lahir_Istri" => $this->input->post('Tanggal_Lahir_Istri', true),
            "Alamat" => $this->input->post('Alamat', true),
            "umur_Suami" => $this->input->post('Umur_Suami', true),
            "Umur_Istri" => $this->input->post('Umur_Istri', true),
            "Rt" => $this->input->post('Rt', true),
            "Rw" => $this->input->post('Rw', true),
            "Desa" => $this->input->post('Desa', true),
            "Kecamatan" => $this->input->post('Kecamatan', true),
            "Kabupaten" => $this->input->post('Kabupaten', true),
            "Provinsi" => $this->input->post('Provinsi', true),
            "Jumlah_Anak_Lk" => $this->input->post('Jumlah_Anak_Lk', true),
            "Jumlah_Anak_Pr" => $this->input->post('Jumlah_Anak_Pr', true),
            "Umur_Anak_Kecil" => $this->input->post('Umur_Anak_Kecil', true),
            "Tanggal_Pelkon" => $this->input->post('Tanggal_Pelkon', true),
            "Tempat_Pelkon" => $this->input->post('Tempat_Pelkon', true),
            "Metoda_Pelkon" => $this->input->post('Metoda_Pelkon', true),
            "Do_Dari" => $this->input->post('Do_Dari', true)
        ];

        $this->db->where('Id_Akseptor', $this->input->post('id'));
        $this->db->update('akseptor', $data);
    }

    public function hapus($id)
    {
        $this->db->where('Id_Akseptor', $id);
        $this->db->delete('akseptor');
    }
}
