<?php

class Vitamin extends CI_Controller{

    // Index Home
    public function index()
    {
        $data['vitamin'] = $this->Vitamin_Model->getAllVitamin();
        $this->load->view('Template/Header2');
        $this->load->view('Vitamin/Index',$data);
        $this->load->view('Template/Footer2');
    }
    // Penutup Index

    // Proses Tambah Data Warga Tamu
    public function tambah()
    {
        $dariDB = $this->Vitamin_Model->cekkodevit();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 4,3);
        $Id_Vitamin = $nourut + 1;
        $data = array('Id_Vitamin' => $Id_Vitamin);

        $this->form_validation->set_rules('Nama_Vitamin','Nama Vitamin','required');
        $this->form_validation->set_rules('Usia_Wajib_Vitamin','Usia Wajib Vitamin','required');

        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Template/Header2');
        $this->load->view('Vitamin/tambah',$data);
        $this->load->view('Template/Footer2');
        } else {
            $this->Vitamin_Model->tambah();
            redirect('vitamin');
        }
    }

    // Edit
    public function edit($id)
    {
        $data['vitamin'] = $this->Vitamin_Model->getVitaminDet($id);
        $this->form_validation->set_rules('Nama_Vitamin', 'Nama Vitamin', 'required');
        $this->form_validation->set_rules('Usia_Wajib_Vitamin', 'Usia Wajib Anak', 'required');
        
        if( $this->form_validation->run() == FALSE) 
        {
            $this->load->view('Template/Header2');
            $this->load->view('Vitamin/Edit', $data);
            $this->load->view('Template/Footer2');
        } else {
            $this->Vitamin_Model->ubahVitamin();
            redirect('Vitamin');
        }
    }

    //Hapus Data
    public function hapus($id)
   {
       $this->Vitamin_Model->hapusVit($id);
       redirect('Vitamin');
   }

   public function detail($id)
   {
        $data['vitamin'] = $this->Vitamin_Model->getVitaminDetail($id);
        $this->load->view('Template/Header2');
        $this->load->view('Vitamin/Detail', $data);
        $this->load->view('Template/Footer2');
   }

}
