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
		$this->form_validation->set_rules('Nama_KK', 'Nama Vitamin', 'required');

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
			redirect('hamil');
		}
	}
}
