<?php

class Lahir extends CI_Controller{

    // Index Home
    public function index()
    {
        $data['lahir'] = $this->Lahir_Model->getalldata();
        $this->load->view('Template/Header4');
        $this->load->view('Lahir/Index',$data);
        $this->load->view('Template/Footer4');
    }

    // Proses Tambah Data Warga Tamu
    public function tambah()
    {
        $dariDB = $this->Lahir_Model->cekkodelhr();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 4,5);
        $Id_Lahir = $nourut + 1;
        $data = array('Id_Lahir' => $Id_Lahir);

        $this->form_validation->set_rules('Nama_Suami','Nama Suami','required');
        $this->form_validation->set_rules('Umur_Suami','Umur Suami','required');
        $this->form_validation->set_rules('Nama_Istri','Nama Istri','required');
        $this->form_validation->set_rules('Umur_Istri','Umur Istri','required');
        $this->form_validation->set_rules('Rt','RT','required');
        $this->form_validation->set_rules('Nama_Bayi','Nama Anak','required');
        $this->form_validation->set_rules('Anak_Ke','Anak Ke-','required');

        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Template/Header4');
        $this->load->view('Lahir/tambah',$data);
        $this->load->view('Template/Footer4');
        } else {
            $this->Lahir_Model->tambah();
            redirect('lahir');
        }
    }

    //Hapus Data
    public function hapus($id)
   {
       $this->Lahir_Model->hapus($id);
       redirect('lahir');
   }

   public function edit($id)
   {
       $data['lahir'] = $this->Lahir_Model->getlahirdetail($id);
       $data['Jenis_Kelamin_Bayi'] = ['Laki-Laki', 'Perempuan'];
       $data['Rt'] = ['001', '002', '003', '004', '005'];
       $this->form_validation->set_rules('Nama_Suami','Nama Suami','required');
        $this->form_validation->set_rules('Umur_Suami','Umur Suami','required');
        $this->form_validation->set_rules('Nama_Istri','Nama Istri','required');
        $this->form_validation->set_rules('Umur_Istri','Umur Istri','required');
        $this->form_validation->set_rules('Rt','RT','required');
        $this->form_validation->set_rules('Nama_Bayi','Nama Anak','required');
        $this->form_validation->set_rules('Anak_Ke','Anak Ke-','required');
       
       if( $this->form_validation->run() == FALSE) 
       {
       $this->load->view('Template/Header4');
       $this->load->view('Lahir/Edit', $data);
       $this->load->view('Template/Footer4');
       } else {
          $this->Lahir_Model->edit();
          redirect('Lahir');
       }
   }

}