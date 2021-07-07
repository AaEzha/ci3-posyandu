<?php

class Kematian extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in(4);
		$this->load->model('Mkematian');
	}

	// Index Home
	public function index()
	{
		$data['mati'] = $this->Kematian_Model->getalldata();
		$this->load->view('Template/Header4');
		$this->load->view('Kematian/Index', $data);
		$this->load->view('Template/Footer4');
	}

	// Proses Tambah Data Warga Tamu
	public function tambah()
	{
		$dariDB = $this->Kematian_Model->cekkodemt();
		// contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
		$nourut = substr($dariDB, 4, 5);
		$Id_Kematian = $nourut + 1;
		$data = array('Id_Kematian' => $Id_Kematian);

		$this->form_validation->set_rules('Nama_Meninggal', 'Nama Vitamin', 'required');
		$this->form_validation->set_rules('Umur', 'Umur Suami', 'required');
		$this->form_validation->set_rules('Penyebab', 'Nama Istri', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['js'] = "Kematian/js";
			$this->load->view('Template/Header4');
			$this->load->view('Kematian/Tambah', $data);
			$this->load->view('Template/Footer4', $data);
		} else {
			$this->Kematian_Model->tambah();
			redirect('kematian');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('Penyebab', 'Nama Istri', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['js'] = "Kematian/js";
			$data['data'] = Mkematian::find($id);
			$this->load->view('Template/Header4');
			$this->load->view('Kematian/Edit', $data);
			$this->load->view('Template/Footer4', $data);
		} else {
			$d = Mkematian::find($this->input->post('Id_Kematian'));
			$d->Tanggal_Meninggal = $this->input->post('Tanggal_Meninggal');
			$d->Penyebab = $this->input->post('Penyebab');
			$d->Rt = $this->input->post('Rt');
			$d->save();
			redirect('kematian');
		}
	}

	public function detail($id)
	{
		$data['data'] = Mkematian::find($id);
		$this->load->view('Template/Header4');
		$this->load->view('Kematian/Detail', $data);
		$this->load->view('Template/Footer4', $data);
	}

	//Hapus Data
	public function hapus($id)
	{
		$this->Kematian_Model->hapus($id);
		redirect('kematian');
	}
}
