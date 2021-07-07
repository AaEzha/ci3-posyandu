<?php

class Vaksin extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		is_logged_in(2);
	}

    // Index Home
    public function index()
    {
        $data['vaksin'] = $this->Vaksin_Model->getAllVaksin();
        $this->load->view('Template/Header2');
        $this->load->view('Vaksin/Index',$data);
        $this->load->view('Template/Footer2');
    }
    // Penutup Index

     // Proses Tambah Data Warga Tamu
    public function tambah()
    {
        $dariDB = $this->Vaksin_Model->cekkodevak();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 3,3);
        $Id_Vaksin = $nourut + 1;
        $data = array('Id_Vaksin' => $Id_Vaksin);

        $this->form_validation->set_rules('Nama_Vaksin','Nama Vaksin','required');
        $this->form_validation->set_rules('Usia_Wajib_Vaksin','Usia Wajib Vaksin','required');

        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Template/Header2');
        $this->load->view('Vaksin/Tambah',$data);
        $this->load->view('Template/Footer2');
        } else {
            $this->Vaksin_Model->tambah();
            redirect('vaksin');
        }
    }

     // Edit
    public function edit($id)
    {
        $data['vaksin'] = $this->Vaksin_Model->getVaksinModel($id);
        $this->form_validation->set_rules('Nama_Vaksin', 'Nama Vaksin', 'required');
        $this->form_validation->set_rules('Usia_Wajib_Vaksin', 'Usia Wajib Anak', 'required');
        
        if( $this->form_validation->run() == FALSE) 
        {
            $this->load->view('Template/Header2');
            $this->load->view('Vaksin/Edit', $data);
            $this->load->view('Template/Footer2');
        } else {
            $this->Vaksin_Model->ubahVaksin();
            redirect('Vaksin');
        }
    }
    
    //Hapus Data
    public function hapus($id)
   {
       $this->Vaksin_Model->hapusvak($id);
       redirect('Vaksin');
   }

   public function detail($id)
   {
        $data['vaksin'] = $this->Vaksin_Model->getVaksinDetail($id);
        $this->load->view('Template/Header2');
        $this->load->view('Vaksin/Detail', $data);
        $this->load->view('Template/Footer2');
   }
}
