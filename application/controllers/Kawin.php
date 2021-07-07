<?php

class Kawin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in(4);
		$this->load->model('Mkawin');
	}

	// Index Home
	public function index()
	{
		$data['kawin'] = $this->Kawin_Model->getalldata();
		$this->load->view('Template/Header4');
		$this->load->view('Kawin/Index', $data);
		$this->load->view('Template/Footer4');
	}

	// Proses Tambah Data Warga Tamu
	public function tambah()
	{
		$dariDB = $this->Kawin_Model->cekkodekwn();
		// contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
		$nourut = substr($dariDB, 4, 5);
		$Id_Kawin = $nourut + 1;
		$data = array('Id_Kawin' => $Id_Kawin);

		$this->form_validation->set_rules('Nama_Suami', 'Nama Vitamin', 'required');
		$this->form_validation->set_rules('Umur_Suami', 'Umur Suami', 'required');
		$this->form_validation->set_rules('Pekerjaan_Suami', 'Umur Istri', 'required');
		$this->form_validation->set_rules('Alamat_Suami', 'required');
		$this->form_validation->set_rules('Rt_Suami', 'Nama Anak', 'required');
		$this->form_validation->set_rules('Rw_Suami', '-', 'required');
		$this->form_validation->set_rules('Desa_Suami', '-', 'required');
		$this->form_validation->set_rules('Kecamatan_Suami', '-', 'required');
		$this->form_validation->set_rules('Kabupaten_Suami', '-', 'required');
		$this->form_validation->set_rules('Provinsi_Suami', '-', 'required');
		$this->form_validation->set_rules('Nama_Istri', '-', 'required');
		$this->form_validation->set_rules('Umur_Istri', '-', 'required');
		$this->form_validation->set_rules('Pekerjaan_Istri', '-', 'required');
		$this->form_validation->set_rules('Alamat_Istri', '-', 'required');
		$this->form_validation->set_rules('Rt_Istri', '-', 'required');
		$this->form_validation->set_rules('Rw_Istri', '-', 'required');
		$this->form_validation->set_rules('Desa_Istri', '-', 'required');
		$this->form_validation->set_rules('Kecamatan_Istri', '-', 'required');
		$this->form_validation->set_rules('Kabupaten_Istri', '-', 'required');
		$this->form_validation->set_rules('Provinsi_Istri', '-', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['js'] = "Kawin/js";
			$this->load->view('Template/Header4');
			$this->load->view('Kawin/Tambah', $data);
			$this->load->view('Template/Footer4', $data);
		} else {
			$this->Kawin_Model->tambah();
			redirect('kawin');
		}
	}

	public function edit($id)
	{
		$dariDB = $this->Kawin_Model->cekkodekwn();
		// contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
		$nourut = substr($dariDB, 4, 5);
		$Id_Kawin = $nourut + 1;
		$data = array('Id_Kawin' => $Id_Kawin);

		$this->form_validation->set_rules('Nama_Suami', 'Nama Vitamin', 'required');
		$this->form_validation->set_rules('Umur_Suami', 'Umur Suami', 'required');
		$this->form_validation->set_rules('Pekerjaan_Suami', 'Umur Istri', 'required');
		$this->form_validation->set_rules('Alamat_Suami', 'required');
		$this->form_validation->set_rules('Rt_Suami', 'Nama Anak', 'required');
		$this->form_validation->set_rules('Rw_Suami', '-', 'required');
		$this->form_validation->set_rules('Desa_Suami', '-', 'required');
		$this->form_validation->set_rules('Kecamatan_Suami', '-', 'required');
		$this->form_validation->set_rules('Kabupaten_Suami', '-', 'required');
		$this->form_validation->set_rules('Provinsi_Suami', '-', 'required');
		$this->form_validation->set_rules('Nama_Istri', '-', 'required');
		$this->form_validation->set_rules('Umur_Istri', '-', 'required');
		$this->form_validation->set_rules('Pekerjaan_Istri', '-', 'required');
		$this->form_validation->set_rules('Alamat_Istri', '-', 'required');
		$this->form_validation->set_rules('Rt_Istri', '-', 'required');
		$this->form_validation->set_rules('Rw_Istri', '-', 'required');
		$this->form_validation->set_rules('Desa_Istri', '-', 'required');
		$this->form_validation->set_rules('Kecamatan_Istri', '-', 'required');
		$this->form_validation->set_rules('Kabupaten_Istri', '-', 'required');
		$this->form_validation->set_rules('Provinsi_Istri', '-', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['js'] = "Kawin/js";
			$data['data'] = Mkawin::find($id);
			$data['id'] = $id;
			$this->load->view('Template/Header4');
			$this->load->view('Kawin/Edit', $data);
			$this->load->view('Template/Footer4', $data);
		} else {
			$d = Mkawin::find($id);
			$d->update([
				"Nama_Suami" => $this->input->post('Nama_Suami', true),
				"Umur_Suami" => $this->input->post('Umur_Suami', true),
				"Pendidikan_Suami" => $this->input->post('Pendidikan_Suami', true),
				"Pekerjaan_Suami" => $this->input->post('Pekerjaan_Suami', true),
				"Alamat_Suami" => $this->input->post('Alamat_Suami', true),
				"Tanggal_Lahir_Suami" => $this->input->post('Tanggal_Lahir_Suami', true),
				"Tanggal_Lahir_Istri" => $this->input->post('Tanggal_Lahir_Istri', true),
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
			]);
			redirect('kawin');
		}
	}

	public function detail($id)
	{
		$data['data'] = Mkawin::find($id);
		$this->load->view('Template/Header4');
		$this->load->view('Kawin/Detail', $data);
		$this->load->view('Template/Footer4');
	}

	//Hapus Data
	public function hapus($id)
	{
		$this->Kawin_Model->hapus($id);
		redirect('kawin');
	}
}
