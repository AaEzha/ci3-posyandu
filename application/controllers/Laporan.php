<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		redirect('auth/blocked');
	}

	public function anak()
	{
		$this->load->model('Manak');
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
			$this->load->model('Mtimbangan');
			$data['data'] = Mtimbangan::orderBy('Tanggal_Timbang', 'asc')->where('Tanggal_Timbang', 'like', $this->input->post('bulan').'%')->get();
			$data['bulan'] = $this->input->post('bulan');
			$this->load->view('Template/Header2');
			$this->load->view('laporan/imunisasi', $data);
			$this->load->view('Template/Footer2');
		}
	}

	public function vaksin()
	{
		$this->load->model('Mvaksin');
		$data['title'] = "Data Vaksin";
		$data['data'] = Mvaksin::all();
		$this->load->view('Template/Header2');
		$this->load->view('laporan/vaksin', $data);
		$this->load->view('Template/Footer2');
	}

	public function vitamin()
	{
		$this->load->model('Mvitamin');
		$data['title'] = "Data Vitamin";
		$data['data'] = Mvitamin::all();
		$this->load->view('Template/Header2');
		$this->load->view('laporan/vitamin', $data);
		$this->load->view('Template/Footer2');
	}

	public function akseptor()
	{
		$data['title'] = "Data Akseptor";
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Template/Header4');
			$this->load->view('laporan/form', $data);
			$this->load->view('Template/Footer4');
		} else {
			$this->load->model('Makseptor');
			$data['data'] = Makseptor::orderBy('Tanggal_Pelkon', 'asc')->where('Tanggal_Pelkon', 'like', $this->input->post('bulan').'%')->get();
			$data['bulan'] = $this->input->post('bulan');
			$this->load->view('Template/Header4');
			$this->load->view('laporan/akseptor', $data);
			$this->load->view('Template/Footer4');
		}
	}

	public function persalinan()
	{
		$data['title'] = "Data Ibu Melahirkan";
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Template/Header4');
			$this->load->view('laporan/form', $data);
			$this->load->view('Template/Footer4');
		} else {
			$this->load->model('Mmelahirkan');
			$data['data'] = Mmelahirkan::orderBy('Tanggal_Lahir_Bayi', 'asc')->where('Tanggal_Lahir_Bayi', 'like', $this->input->post('bulan').'%')->get();
			$data['bulan'] = $this->input->post('bulan');
			$this->load->view('Template/Header4');
			$this->load->view('laporan/persalinan', $data);
			$this->load->view('Template/Footer4');
		}
	}

	public function perkawinan()
	{
		$this->load->model('Mkawin');
		$data['title'] = "Data Perkawinan";
		$data['data'] = Mkawin::orderBy('Id_Kawin', 'desc')->get();
		$this->load->view('Template/Header4');
		$this->load->view('laporan/perkawinan', $data);
		$this->load->view('Template/Footer4');
	}

	public function kematian()
	{
		$data['title'] = "Data Kematian";
		$this->form_validation->set_rules('bulan', 'Bulan', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Template/Header4');
			$this->load->view('laporan/form', $data);
			$this->load->view('Template/Footer4');
		} else {
			$this->load->model('Mkematian');
			$data['data'] = Mkematian::orderBy('Tanggal_Meninggal', 'desc')->where('Tanggal_Meninggal', 'like', $this->input->post('bulan').'%')->get();
			$data['bulan'] = $this->input->post('bulan');
			$this->load->view('Template/Header4');
			$this->load->view('laporan/kematian', $data);
			$this->load->view('Template/Footer4');
		}
	}

	public function datang()
	{
		$this->load->model('Mdatang');
		$data['title'] = "Data Penduduk Datang";
		$data['data'] = Mdatang::orderBy('Id_Datang', 'desc')->get();
		$this->load->view('Template/Header4');
		$this->load->view('laporan/datang', $data);
		$this->load->view('Template/Footer4');
	}

	public function pindah()
	{
		$this->load->model('Mpindah');
		$data['title'] = "Data Penduduk Pindah";
		$data['data'] = Mpindah::orderBy('Id_Pindah', 'desc')->get();
		$this->load->view('Template/Header4');
		$this->load->view('laporan/pindah', $data);
		$this->load->view('Template/Footer4');
	}

	public function hamil()
	{
		$this->load->model('Mhamil');
		$data['title'] = "Data Ibu Hamil";
		$data['hamil'] = Mhamil::orderBy('Id_Kehamilan', 'desc')->get();
		$this->load->view('Template/Header3');
		$this->load->view('laporan/hamil', $data);
		$this->load->view('Template/Footer3');
	}
}
