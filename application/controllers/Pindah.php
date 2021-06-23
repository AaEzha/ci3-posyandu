<?php

class Pindah extends CI_Controller{

    // Index Home
    public function index()
    {
        $data['pindah'] = $this->Pindah_Model->getalldata();
        $this->load->view('Template/Header4');
        $this->load->view('Pindah/Index',$data);
        $this->load->view('Template/Footer4');
    }

    // Proses Tambah Data Warga Tamu
    public function tambah()
    {
        $dariDB = $this->Pindah_Model->cekkodepdh();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 4,5);
        $Id_Pindah = $nourut + 1;
        $data = array('Id_Pindah' => $Id_Pindah);

        $this->form_validation->set_rules('Nama_KK_Pindah','Nama Vitamin','required');
        $this->form_validation->set_rules('Umur_KK_Pindah','Nama Istri','required');
        $this->form_validation->set_rules('Nama_Istri_Pindah','Umur Istri','required');
        $this->form_validation->set_rules('Umur_Istri_Pindah','Nama Anak','required');
        $this->form_validation->set_rules('Jumlah_Jiwa_Lk_Pindah','Anak Ke-','required');
        $this->form_validation->set_rules('Jumlah_Jiwa_Pr_Pindah','Anak Ke-','required');
        $this->form_validation->set_rules('Jumlah_Anak_Pr_Pindah','Anak Ke-','required');
        $this->form_validation->set_rules('Jumlah_Anak_Lk_Pindah','Anak Ke-','required');
        $this->form_validation->set_rules('Kb','Anak Ke-','required');
        $this->form_validation->set_rules('Ks','Anak Ke-','required');

        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Template/Header4');
        $this->load->view('Pindah/tambah',$data);
        $this->load->view('Template/Footer4');
        } else {
            $this->Pindah_Model->tambah();
            redirect('pindah');
        }
    }

    //Hapus Data
    public function hapus($id)
   {
       $this->Pindah_Model->hapus($id);
       redirect('pindah');
   }

}