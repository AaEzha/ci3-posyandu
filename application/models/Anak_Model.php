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
		$this->load->model('Mpenduduk');

		$ayah = Mpenduduk::find($this->input->post('nik_ayah', true));
		$ibu = Mpenduduk::find($this->input->post('nik_ibu', true));

        $data = [
            "Id_Anak" => $this->input->post('Id_Anak', true),
            "NIK" => $this->input->post('NIK', true),
            "Nama_Anak" => $this->input->post('Nama_Anak', true),
			"Nama_Ayah" => $ayah->Nama,
			"Nama_Ibu" => $ibu->Nama,
            "Tanggal_Lahir" => $this->input->post('Tanggal_Lahir', true),
            "Tempat_Lahir" => $this->input->post('Tempat_Lahir', true),
            "Jenis_Kelamin" => $this->input->post('Jenis_Kelamin', true),
            "Umur" => $this->input->post('Umur', true),
            "Anak_Ke" => $this->input->post('Anak_Ke', true),
            "nik_ibu" => $this->input->post('nik_ibu', true),
            "nik_ayah" => $this->input->post('nik_ayah', true),
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

		Mpenduduk::insert([
			'NIK' => $this->input->post('NIK', true),
			'No_KK' => $ayah->No_KK,
			'Nama' => $this->input->post('Nama_Anak', true),
            "Jenis_Kelamin" => $this->input->post('Jenis_Kelamin', true),
			"Tanggal_Lahir" => $this->input->post('Tanggal_Lahir', true),
            "Tempat_Lahir" => $this->input->post('Tempat_Lahir', true),
            "Alamat" => $this->input->post('Alamat', true),
			"Agama" => $ayah->Agama,
			"Nama_Ibu" => $ibu->Nama,
			"Nama_Ayah" => $ayah->Nama,
			"Pekerjaan" => "Belum bekerja",
			"Status_Hubungan" => "Anak",
			"Alamat" => $ayah->Alamat,
            "Rt" => $ayah->Rt,
            "Rw" => $ayah->Rw,
            "Desa" => $ayah->Desa,
            "Kecamatan" => $ayah->Kecamatan,
            "Kabupaten" => $ayah->Kabupaten,
            "Provinsi" => $ayah->Provinsi,
		]);
    }
    

    public function hapusAnak($id)
    {
		$this->load->model('Manak');
		$this->load->model('Mpenduduk');
		$anak = Manak::find($id);
		$penduduk = Mpenduduk::find($anak->NIK);
		$penduduk->delete();
		$anak->delete();

        // $this->db->where('Id_Anak', $id);
        // $this->db->delete('anak');
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
            // "Umur" => $this->input->post('Umur', true),
            "Anak_Ke" => $this->input->post('Anak_Ke', true),
            "nik_ibu" => $this->input->post('nik_ibu', true),
            "nik_ayah" => $this->input->post('nik_ayah', true),
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
