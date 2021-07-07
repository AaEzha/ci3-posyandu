<?php

class Penduduk extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		is_logged_in(4);
		$this->load->model('Mpenduduk');
	}

    public function index()
    {
		$data['data'] = Mpenduduk::all();
        $this->load->view('Template/Header4');
        $this->load->view('penduduk/index',$data);
        $this->load->view('Template/Footer4');
    }

    public function detail($id)
    {
		$data['data'] = Mpenduduk::find($id);
        $this->load->view('Template/Header4');
        $this->load->view('penduduk/detail',$data);
        $this->load->view('Template/Footer4');
    }

	public function tambah()
	{
		$this->form_validation->set_rules('No_KK','No_KK','required');
		$this->form_validation->set_rules('NIK','NIK','required');
		$this->form_validation->set_rules('Nama','Nama','required');
		$this->form_validation->set_rules('Jenis_Kelamin','Jenis_Kelamin','required');
		$this->form_validation->set_rules('Tempat_Lahir','Tempat_Lahir','required');
		$this->form_validation->set_rules('Tanggal_Lahir','Tanggal_Lahir','required');
		$this->form_validation->set_rules('Nama_Ibu','Nama_Ibu','required');
		$this->form_validation->set_rules('Nama_Ayah','Nama_Ayah','required');
		$this->form_validation->set_rules('Pekerjaan','Pekerjaan','required');
		$this->form_validation->set_rules('Status_Hubungan','Status_Hubungan','required');
		$this->form_validation->set_rules('Pendidikan','Pendidikan','required');
		$this->form_validation->set_rules('Agama','Agama','required');
		$this->form_validation->set_rules('Alamat','Alamat','required');
		$this->form_validation->set_rules('Rt','Rt','required');
		$this->form_validation->set_rules('Rw','Rw','required');
		$this->form_validation->set_rules('Desa','Desa','required');
		$this->form_validation->set_rules('Alamat','Alamat','required');
		$this->form_validation->set_rules('Kecamatan','Kecamatan','required');
		$this->form_validation->set_rules('Kabupaten','Kabupaten','required');
		$this->form_validation->set_rules('Provinsi','Provinsi','required');
		$data['Rt'] = ['001','002','003','004','005'];
		$data['hubungan'] = ['Kepala Keluarga','Istri','Anak','Kerabat','Lainnya'];
		$data['agama'] = ['Islam','Katolik','Protestan','Hindu','Budha'];
		$data['pendidikan'] = ['Belum Sekolah','TK','SD','SMP','SMA','D1','D2','D3','S1','S2','S3'];

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Template/Header4');
			$this->load->view('penduduk/tambah', $data);
			$this->load->view('Template/Footer4');
		} else {
			$d = new Mpenduduk();
			$d->NIK = $this->input->post('NIK');
			$d->No_KK = $this->input->post('No_KK');
			$d->Nama = $this->input->post('Nama');
			$d->Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
			$d->Tempat_Lahir = $this->input->post('Tempat_Lahir');
			$d->Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
			$d->Nama_Ibu = $this->input->post('Nama_Ibu');
			$d->Nama_Ayah = $this->input->post('Nama_Ayah');
			$d->Pekerjaan = $this->input->post('Pekerjaan');
			$d->KWN = $this->input->post('KWN');
			$d->Status_Hubungan = $this->input->post('Status_Hubungan');
			$d->Pendidikan = $this->input->post('Pendidikan');
			$d->Agama = $this->input->post('Agama');
			$d->Alamat = $this->input->post('Alamat');
			$d->Rt = $this->input->post('Rt');
			$d->Rw = $this->input->post('Rw');
			$d->Desa = $this->input->post('Desa');
			$d->Kabupaten = $this->input->post('Kabupaten');
			$d->Kecamatan = $this->input->post('Kecamatan');
			$d->Provinsi = $this->input->post('Provinsi');
			$d->save();
			redirect('penduduk');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('No_KK','No_KK','required');
		$this->form_validation->set_rules('NIK','NIK','required');
		$this->form_validation->set_rules('Nama','Nama','required');
		$this->form_validation->set_rules('Jenis_Kelamin','Jenis_Kelamin','required');
		$this->form_validation->set_rules('Tempat_Lahir','Tempat_Lahir','required');
		$this->form_validation->set_rules('Tanggal_Lahir','Tanggal_Lahir','required');
		$this->form_validation->set_rules('Nama_Ibu','Nama_Ibu','required');
		$this->form_validation->set_rules('Nama_Ayah','Nama_Ayah','required');
		$this->form_validation->set_rules('Pekerjaan','Pekerjaan','required');
		$this->form_validation->set_rules('Status_Hubungan','Status_Hubungan','required');
		$this->form_validation->set_rules('Pendidikan','Pendidikan','required');
		$this->form_validation->set_rules('Agama','Agama','required');
		$this->form_validation->set_rules('Alamat','Alamat','required');
		$this->form_validation->set_rules('Rt','Rt','required');
		$this->form_validation->set_rules('Rw','Rw','required');
		$this->form_validation->set_rules('Desa','Desa','required');
		$this->form_validation->set_rules('Alamat','Alamat','required');
		$this->form_validation->set_rules('Kecamatan','Kecamatan','required');
		$this->form_validation->set_rules('Kabupaten','Kabupaten','required');
		$this->form_validation->set_rules('Provinsi','Provinsi','required');
		$data['Rt'] = ['001','002','003','004','005'];
		$data['hubungan'] = ['Kepala Keluarga','Istri','Anak','Kerabat','Lainnya'];
		$data['agama'] = ['Islam','Katolik','Protestan','Hindu','Budha'];
		$data['pendidikan'] = ['Belum Sekolah','TK','SD','SMP','SMA','D1','D2','D3','S1','S2','S3'];

		if ($this->form_validation->run() == FALSE) {
			$data['data'] = Mpenduduk::find($id);
			$this->load->view('Template/Header4');
			$this->load->view('penduduk/edit', $data);
			$this->load->view('Template/Footer4');
		} else {
			$d = Mpenduduk::find($id);
			// $d->NIK = $this->input->post('NIK');
			$d->No_KK = $this->input->post('No_KK');
			$d->Nama = $this->input->post('Nama');
			$d->Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
			$d->Tempat_Lahir = $this->input->post('Tempat_Lahir');
			$d->Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
			$d->Nama_Ibu = $this->input->post('Nama_Ibu');
			$d->Nama_Ayah = $this->input->post('Nama_Ayah');
			$d->Pekerjaan = $this->input->post('Pekerjaan');
			$d->KWN = $this->input->post('KWN');
			$d->Status_Hubungan = $this->input->post('Status_Hubungan');
			$d->Pendidikan = $this->input->post('Pendidikan');
			$d->Agama = $this->input->post('Agama');
			$d->Alamat = $this->input->post('Alamat');
			$d->Rt = $this->input->post('Rt');
			$d->Rw = $this->input->post('Rw');
			$d->Desa = $this->input->post('Desa');
			$d->Kabupaten = $this->input->post('Kabupaten');
			$d->Kecamatan = $this->input->post('Kecamatan');
			$d->Provinsi = $this->input->post('Provinsi');
			$d->save();
			redirect('penduduk');
		}
	}
}
