<?php

class Timbangan extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		is_logged_in(2);
		$this->load->model('Mtimbangan');
		$this->load->model('Manak');
		$this->load->model('Mvaksin');
		$this->load->model('Mvitamin');
		$this->load->model('Timbang_Model');
	}

    // Index Home
    public function index()
    {
        $data['Timbang'] = $this->Timbang_Model->getAnak();
        $this->load->view('Template/Header2');
        $this->load->view('Timbangan/Index',$data);
        $this->load->view('Template/Footer2');
    }
    
    public function tambah($id)
    {
		$this->form_validation->set_rules('Berat_Badan','Berat_Badan','required');
		$this->form_validation->set_rules('Id_Vitamin','Vitamin','required');
		$this->form_validation->set_rules('Id_Vaksin','Vaksin','required');
		$this->form_validation->set_rules('Tanggal_Timbang','Tanggal_Timbang','required');

		if( $this->form_validation->run() == FALSE) {
			$dariDB = $this->Timbang_Model->kode();
			$nourut = substr($dariDB, 9, 5);
			$idnya = $nourut + 1;

			$data['id'] = $idnya;
			$data['anak'] = Manak::where('Id_Anak',$id)->first();
			$data['vaksin'] = Mvaksin::all();
			$data['vitamin'] = Mvitamin::all();

			$this->load->view('Template/Header2', $data);
			$this->load->view('Timbangan/Tambah', $data);
			$this->load->view('Template/Footer2', $data);
		}else{
			Mtimbangan::insert([
				'Id_Timbangan' => $this->input->post('Id_Timbangan'),
				'NIK' => $this->input->post('NIK'),
				'Berat_Badan' => $this->input->post('Berat_Badan'),
				'Tinggi_Badan' => $this->input->post('Tinggi_Badan'),
				'Tanggal_Timbang' => $this->input->post('Tanggal_Timbang'),
				'Id_Vitamin' => $this->input->post('Id_Vitamin'),
				'Id_Vaksin' => $this->input->post('Id_Vaksin'),
				'Hasil_Gizi' => $this->input->post('Hasil_Gizi'),
			]);
			redirect('timbangan');
		}
        
    }

	public function detail($id)
	{
		$data['anak'] = Manak::where('Id_Anak',$id)->first();
		$data['timbangan'] = Mtimbangan::where('NIK', $data['anak']->NIK)->get();

		$this->load->view('Template/Header2', $data);
		$this->load->view('Timbangan/detail', $data);
		$this->load->view('Template/Footer2', $data);
	}
    

}
