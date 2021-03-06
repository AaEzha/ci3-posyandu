<?php

class Datang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in(4);
		$this->load->model('Mdatang');
	}

	// Index Home
	public function index()
	{
		$data['datang'] = $this->Datang_Model->getalldata();
		$this->load->view('Template/Header4');
		$this->load->view('Datang/Index', $data);
		$this->load->view('Template/Footer4');
	}

	// Proses Tambah Data Warga Tamu
	public function tambah()
	{
		$dariDB = $this->Datang_Model->cekkodedtg();
		// contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
		$nourut = substr($dariDB, 4, 5);
		$Id_Datang = $nourut + 1;
		$data = array('Id_Datang' => $Id_Datang);

		$this->form_validation->set_rules('Nama_KK', 'Nama Vitamin', 'required');
		$this->form_validation->set_rules('Umur_KK', 'Nama Istri', 'required');
		$this->form_validation->set_rules('Nama_Istri', 'Umur Istri', 'required');
		$this->form_validation->set_rules('Umur_Istri', 'Nama Anak', 'required');
		$this->form_validation->set_rules('Jumlah_Jiwa_Lk', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Jiwa_Pr', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Pr', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Lk', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Kb', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Ks', 'Anak Ke-', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data['js'] = "Datang/js";
			$this->load->view('Template/Header4');
			$this->load->view('Datang/Tambah', $data);
			$this->load->view('Template/Footer4', $data);
		} else {
			$this->Datang_Model->tambah();
			redirect('datang');
		}
	}

	//Hapus Data
	public function hapus($id)
	{
		$this->Datang_Model->hapus($id);
		redirect('datang');
	}

	// Edit
	public function edit($id)
	{
		$this->form_validation->set_rules('Nama_KK', 'Nama Vitamin', 'required');
		$this->form_validation->set_rules('Umur_KK', 'Nama Istri', 'required');
		$this->form_validation->set_rules('Nama_Istri', 'Umur Istri', 'required');
		$this->form_validation->set_rules('Umur_Istri', 'Nama Anak', 'required');
		$this->form_validation->set_rules('Jumlah_Jiwa_Lk', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Jiwa_Pr', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Pr', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Jumlah_Anak_Lk', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Kb', 'Anak Ke-', 'required');
		$this->form_validation->set_rules('Ks', 'Anak Ke-', 'required');


		if ($this->form_validation->run() == FALSE) {
			$data['id'] = $id;
			$data['data'] = Mdatang::find($id);
			$data['js'] = "Datang/js";
			$this->load->view('Template/Header4');
			$this->load->view('Datang/Edit', $data);
			$this->load->view('Template/Footer4', $data);
		} else {
			$this->Datang_Model->edit();
			redirect('datang');
		}
	}

	public function detail($id)
	{
		$data['data'] = Mdatang::find($id);
		$this->load->view('Template/Header4');
		$this->load->view('Datang/Detail', $data);
		$this->load->view('Template/Footer4', $data);
	}
}
