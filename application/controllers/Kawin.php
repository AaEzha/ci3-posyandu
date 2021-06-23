<?php

class Kawin extends CI_Controller{

    // Index Home
    public function index()
    {
        $data['kawin'] = $this->Kawin_Model->getalldata();
        $this->load->view('Template/Header4');
        $this->load->view('Kawin/Index',$data);
        $this->load->view('Template/Footer4');
    }

    // Proses Tambah Data Warga Tamu
    public function tambah()
    {
        $dariDB = $this->Kawin_Model->cekkodekwn();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 4,5);
        $Id_Kawin = $nourut + 1;
        $data = array('Id_Kawin' => $Id_Kawin);

        $this->form_validation->set_rules('Nama_Suami','Nama Vitamin','required');
        $this->form_validation->set_rules('Umur_Suami','Umur Suami','required');
        $this->form_validation->set_rules('Pekerjaan_Suami','Umur Istri','required');
        $this->form_validation->set_rules('Alamat_Suami','required');
        $this->form_validation->set_rules('Rt_Suami','Nama Anak','required');
        $this->form_validation->set_rules('Rw_Suami','-','required');
        $this->form_validation->set_rules('Desa_Suami','-','required');
        $this->form_validation->set_rules('Kecamatan_Suami','-','required');
        $this->form_validation->set_rules('Kabupaten_Suami','-','required');
        $this->form_validation->set_rules('Provinsi_Suami','-','required');
        $this->form_validation->set_rules('Nama_Istri','-','required');
        $this->form_validation->set_rules('Umur_Istri','-','required');
        $this->form_validation->set_rules('Pekerjaan_Istri','-','required');
        $this->form_validation->set_rules('Alamat_Istri','-','required');
        $this->form_validation->set_rules('Rt_Istri','-','required');
        $this->form_validation->set_rules('Rw_Istri','-','required');
        $this->form_validation->set_rules('Desa_Istri','-','required');
        $this->form_validation->set_rules('Kecamatan_Istri','-','required');
        $this->form_validation->set_rules('Kabupaten_Istri','-','required');
        $this->form_validation->set_rules('Provinsi_Istri','-','required');

        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Template/Header4');
        $this->load->view('Kawin/tambah',$data);
        $this->load->view('Template/Footer4');
        } else {
            $this->Kawin_Model->tambah();
            redirect('kawin');
        }
    }

    //Hapus Data
    public function hapus($id)
   {
       $this->Kawin_Model->hapus($id);
       redirect('kawin');
   }

}