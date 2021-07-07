<?php

class Akseptor extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in(4);
	}

	// Index Home
	public function index()
	{
		$data['akseptor'] = $this->Akseptor_Model->getdata();
		$data['title'] = "Data Akseptor";
		$this->load->view('Template/Header4');
		$this->load->view('Akseptor/Index', $data);
		$this->load->view('Template/Footer4', $data);
	}

	// Proses Tambah Data Warga Tamu
	public function tambah()
	{
		$dariDB = $this->Akseptor_Model->cekkodeaks();
		// contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
		$nourut = substr($dariDB, 4, 5);
		$Id_Akseptor = $nourut + 1;
		$data = array('Id_Akseptor' => $Id_Akseptor);

		$this->form_validation->set_rules('Nama_Suami', 'Nama Suami', 'required');
		$this->form_validation->set_rules('Nama_Istri', 'Nama Istri', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Lk', 'Jumlah Anak LK', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Pr', 'Jumlah Anak PR', 'required');
		$this->form_validation->set_rules('Umur_Anak_Kecil', 'Umur Anak Terkecil', 'required');
		$this->form_validation->set_rules('Tempat_Pelkon', 'Tempat Pelkon', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['js'] = "Akseptor/js";
			$this->load->view('Template/Header4');
			$this->load->view('Akseptor/Tambah', $data);
			$this->load->view('Template/Footer4', $data);
		} else {
			$this->Akseptor_Model->tambah();
			redirect('akseptor');
		}
	}

	// Proses Tambah Data Warga Tamu
	public function edit($id)
	{
		$data['Akseptor'] = $this->Akseptor_Model->getdetail($id);
		$data['Metoda_Pelkon'] = ['IUD', 'MOP', 'MOW', 'KONDOM', 'IMPLANT', 'SUNTIK', 'PIL'];
		$data['Do_Dari'] = ['-', 'IUD', 'MOP', 'MOW', 'KONDOM', 'IMPLANT', 'SUNTIK', 'PIL'];
		$data['Rt'] = ['001', '002', '003', '004', '005'];

		$this->form_validation->set_rules('Nama_Suami', 'Nama Suami', 'required');
		$this->form_validation->set_rules('Nama_Istri', 'Nama Istri', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Lk', 'Jumlah Anak LK', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Pr', 'Jumlah Anak PR', 'required');
		$this->form_validation->set_rules('Umur_Anak_Kecil', 'Umur Anak Terkecil', 'required');
		$this->form_validation->set_rules('Tempat_Pelkon', 'Tempat Pelkon', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Template/Header4');
			$this->load->view('Akseptor/Edit', $data);
			$this->load->view('Template/Footer4');
		} else {
			$this->Akseptor_Model->edit($id);
			redirect('akseptor');
		}
	}

	public function detail($id)
	{
		$data['Akseptor'] = $this->Akseptor_Model->getdetail($id);
		$data['Metoda_Pelkon'] = ['IUD', 'MOP', 'MOW', 'KONDOM', 'IMPLANT', 'SUNTIK', 'PIL'];
		$data['Do_Dari'] = ['-', 'IUD', 'MOP', 'MOW', 'KONDOM', 'IMPLANT', 'SUNTIK', 'PIL'];
		$data['Rt'] = ['001', '002', '003', '004', '005'];

		$this->load->view('Template/Header4');
		$this->load->view('Akseptor/Detail', $data);
		$this->load->view('Template/Footer4');
	}

	public function hapus($id)
	{
		$this->Akseptor_Model->hapus($id);
		redirect('Akseptor');
	}
}
