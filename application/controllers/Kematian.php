<?php

class Kematian extends CI_Controller{

    // Index Home
    public function index()
    {
        $data['mati'] = $this->Kematian_Model->getalldata();
        $this->load->view('Template/Header4');
        $this->load->view('Kematian/Index',$data);
        $this->load->view('Template/Footer4');
    }

    // Proses Tambah Data Warga Tamu
    public function tambah()
    {
        $dariDB = $this->Kematian_Model->cekkodemt();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 4,5);
        $Id_Kematian = $nourut + 1;
        $data = array('Id_Kematian' => $Id_Kematian);

        $this->form_validation->set_rules('Nama_Meninggal','Nama Vitamin','required');
        $this->form_validation->set_rules('Umur','Umur Suami','required');
        $this->form_validation->set_rules('Penyebab','Nama Istri','required');

        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Template/Header4');
        $this->load->view('Kematian/tambah',$data);
        $this->load->view('Template/Footer4');
        } else {
            $this->Kematian_Model->tambah();
            redirect('kematian');
        }
    }

    //Hapus Data
    public function hapus($id)
   {
       $this->Kematian_Model->hapus($id);
       redirect('kematian');
   }

}