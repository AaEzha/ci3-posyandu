<?php

class Pindah extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in(4);
		$this->load->model('Mpindah');
	}

	// Index Home
	public function index()
	{
		$data['pindah'] = $this->Pindah_Model->getalldata();
		$this->load->view('Template/Header4');
		$this->load->view('Pindah/Index', $data);
		$this->load->view('Template/Footer4');
	}

	// Proses Tambah Data Warga Tamu
	public function tambah()
	{
		$dariDB = $this->Pindah_Model->cekkodepdh();
		// contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
		$nourut = substr($dariDB, 4, 5);
		$Id_Pindah = $nourut + 1;
		$data = array('Id_Pindah' => $Id_Pindah);

		$this->form_validation->set_rules('Nama_KK_Pindah', 'Nama Kepala Keluarga', 'required');
		$this->form_validation->set_rules('Umur_KK_Pindah', 'Nama Istri', 'required');
		$this->form_validation->set_rules('Nama_Istri_Pindah', 'Umur Istri', 'required');
		$this->form_validation->set_rules('Umur_Istri_Pindah', 'Nama Anak', 'required');
		$this->form_validation->set_rules('Jumlah_Jiwa_Lk_Pindah', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Jiwa_Pr_Pindah', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Pr_Pindah', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Lk_Pindah', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Kb', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Ks', 'Anak Ke-', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['js'] = "Pindah/js";
			$this->load->view('Template/Header4');
			$this->load->view('Pindah/Tambah', $data);
			$this->load->view('Template/Footer4', $data);
		} else {
			$this->Pindah_Model->tambah();
			redirect('pindah');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('Nama_KK_Pindah', 'Nama Kepala Keluarga', 'required');
		$this->form_validation->set_rules('Umur_KK_Pindah', 'Umur Kepala Keluarga', 'required');
		$this->form_validation->set_rules('Nama_Istri_Pindah', 'Nama Istri', 'required');
		$this->form_validation->set_rules('Umur_Istri_Pindah', 'Umur Istri', 'required');
		$this->form_validation->set_rules('Jumlah_Jiwa_Lk_Pindah', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Jiwa_Pr_Pindah', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Lk_Pindah', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Pr_Pindah', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Kb', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Ks', 'Anak Ke-', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data['id'] = $id;
			$data['data'] = Mpindah::find($id);
			$data['js'] = "Pindah/js";
			$this->load->view('Template/Header4');
			$this->load->view('Pindah/Edit', $data);
			$this->load->view('Template/Footer4', $data);
		} else {
			$d = Mpindah::find($id);
			$d->update([
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
			]);
			redirect('pindah');
		}
	}

	public function detail($id)
	{
		$data['data'] = Mpindah::find($id);
		$this->load->view('Template/Header4');
		$this->load->view('Pindah/Detail', $data);
		$this->load->view('Template/Footer4');
	}

	//Hapus Data
	public function hapus($id)
	{
		$this->Pindah_Model->hapus($id);
		redirect('pindah');
	}
}
