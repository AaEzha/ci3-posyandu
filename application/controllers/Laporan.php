<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Manak');
		$this->load->model('Mvitamin');
		$this->load->model('Mvaksin');
		$this->load->model('Mtimbangan');
		$this->load->model('Mpenduduk');
	}

	public function index()
	{
		redirect('auth/blocked');
	}

	public function anak()
	{
		$data['title'] = "Data Anak & Balita";
		$data['anak'] = Manak::all();
		$this->load->view('Template/Header2');
		$this->load->view('laporan/anak', $data);
		$this->load->view('Template/Footer2');
	}

	public function imunisasi()
	{
		$data['title'] = "Data Imunisasi";
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Template/Header2');
			$this->load->view('laporan/form', $data);
			$this->load->view('Template/Footer2');
		} else {
			$data['data'] = Mtimbangan::orderBy('Tanggal_Timbang', 'asc')->where('Tanggal_Timbang', 'like', $this->input->post('bulan').'%')->get();
			$data['bulan'] = $this->input->post('bulan');
			$this->load->view('Template/Header2');
			$this->load->view('laporan/imunisasi', $data);
			$this->load->view('Template/Footer2');
		}
	}

	public function vaksin()
	{
		$data['title'] = "Data Vaksin";
		$data['data'] = Mvaksin::all();
		$this->load->view('Template/Header2');
		$this->load->view('laporan/vaksin', $data);
		$this->load->view('Template/Footer2');
	}

	public function vitamin()
	{
		$data['title'] = "Data Vitamin";
		$data['data'] = Mvitamin::all();
		$this->load->view('Template/Header2');
		$this->load->view('laporan/vitamin', $data);
		$this->load->view('Template/Footer2');
	}
}
