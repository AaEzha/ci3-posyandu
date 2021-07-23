<?php

class Hamil extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in(3);
		$this->load->model('Mhamil');
	}

	// Index Home
	public function index()
	{
		$data['hamil'] = $this->Hamil_Model->getalldata();
		$this->load->view('Template/Header3');
		$this->load->view('Hamil/Index', $data);
		$this->load->view('Template/Footer3');
	}
	// Penutup Index

	public function tambah()
	{
		$this->form_validation->set_rules('Nama_Suami', 'Nama Suami', 'required');
		$this->form_validation->set_rules('Nama_Istri', 'Nama Istri', 'required');
		$this->form_validation->set_rules('Hamil_Ke', 'Hamil ke', 'required');
		$this->form_validation->set_rules('Tanggal_Daftar', 'Tanggal Daftar', 'required');
		$this->form_validation->set_rules('Umur_Hamil_Daftar', 'Umur Hamil Daftar', 'required');
		$this->form_validation->set_rules('Provinsi', 'Provinsi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$dariDB = $this->Hamil_Model->kode();
			$nourut = substr($dariDB, 4, 4);
			$Id_Kehamilan = $nourut + 1;
			$data = array('Id_Kehamilan' => $Id_Kehamilan);
			$data['js'] = "Hamil/js";
			$this->load->view('Template/Header3');
			$this->load->view('Hamil/Tambah', $data);
			$this->load->view('Template/Footer3', $data);
		} else {
			$this->load->model('Hamil_Model');
			$dariDB = $this->Hamil_Model->kode();
			// contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
			$nourut = substr($dariDB, 5, 5);
			$id = $nourut + 1;

			$hamil = new Mhamil();
			$hamil->Id_Kehamilan = "HML-" . sprintf("%04s", $id);
			$hamil->Nik_Suami = $this->input->post('Nik_Suami');
			$hamil->Nama_Suami = $this->input->post('Nama_Suami');
			$hamil->Tanggal_Lahir_Suami = $this->input->post('Tanggal_Lahir_Suami');
			$hamil->Umur_Suami = $this->input->post('Umur_Suami');
			$hamil->Nik_Istri = $this->input->post('Nik_Istri');
			$hamil->Nama_Istri = $this->input->post('Nama_Istri');
			$hamil->Tanggal_Lahir_Istri = $this->input->post('Tanggal_Lahir_Istri');
			$hamil->Umur_Istri = $this->input->post('Umur_Istri');
			$hamil->Hamil_Ke = $this->input->post('Hamil_Ke');
			$hamil->Tanggal_Daftar = $this->input->post('Tanggal_Daftar');
			$hamil->Umur_Hamil_Daftar = $this->input->post('Umur_Hamil_Daftar');
			$hamil->Alamat = $this->input->post('Alamat');
			$hamil->Rt = $this->input->post('Rt');
			$hamil->Rw = $this->input->post('Rw');
			$hamil->Desa = $this->input->post('Desa');
			$hamil->Kecamatan = $this->input->post('Kecamatan');
			$hamil->Kabupaten = $this->input->post('Kabupaten');
			$hamil->Provinsi = $this->input->post('Provinsi');
			$hamil->save();
			redirect('hamil');
		}
	}

	public function hapus($id)
	{
		$data = Mhamil::find($id);
		$data->delete();
		redirect('Hamil');
	}

	public function detail($id)
	{
		$data['data'] = Mhamil::find($id);
		$data['js'] = "Hamil/js";

		$this->load->view('Template/Header3');
		$this->load->view('Hamil/Detail', $data);
		$this->load->view('Template/Footer3', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('Nama_Suami', 'Nama Suami', 'required');
		$this->form_validation->set_rules('Nama_Istri', 'Nama Istri', 'required');
		$this->form_validation->set_rules('Hamil_Ke', 'Hamil ke', 'required');
		$this->form_validation->set_rules('Tanggal_Daftar', 'Tanggal Daftar', 'required');
		$this->form_validation->set_rules('Umur_Hamil_Daftar', 'Umur Hamil Daftar', 'required');
		$this->form_validation->set_rules('Provinsi', 'Provinsi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['data'] = Mhamil::find($id);
			$data['js'] = "Hamil/js";
			$this->load->view('Template/Header3');
			$this->load->view('Hamil/Edit', $data);
			$this->load->view('Template/Footer3', $data);
		} else {
			$hamil = Mhamil::find($id);
			$hamil->Nik_Suami = $this->input->post('Nik_Suami');
			$hamil->Nama_Suami = $this->input->post('Nama_Suami');
			$hamil->Tanggal_Lahir_Suami = $this->input->post('Tanggal_Lahir_Suami');
			$hamil->Umur_Suami = $this->input->post('Umur_Suami');
			$hamil->Nik_Istri = $this->input->post('Nik_Istri');
			$hamil->Nama_Istri = $this->input->post('Nama_Istri');
			$hamil->Tanggal_Lahir_Istri = $this->input->post('Tanggal_Lahir_Istri');
			$hamil->Umur_Istri = $this->input->post('Umur_Istri');
			$hamil->Hamil_Ke = $this->input->post('Hamil_Ke');
			$hamil->Tanggal_Daftar = $this->input->post('Tanggal_Daftar');
			$hamil->Umur_Hamil_Daftar = $this->input->post('Umur_Hamil_Daftar');
			$hamil->Alamat = $this->input->post('Alamat');
			$hamil->Rt = $this->input->post('Rt');
			$hamil->Rw = $this->input->post('Rw');
			$hamil->Desa = $this->input->post('Desa');
			$hamil->Kecamatan = $this->input->post('Kecamatan');
			$hamil->Kabupaten = $this->input->post('Kabupaten');
			$hamil->Provinsi = $this->input->post('Provinsi');
			$hamil->save();
			redirect('hamil');
		}
	}
}
