<?php

class Anak extends CI_Controller{

    // Index Home
    public function index()
    {
        $data['anak'] = $this->Anak_Model->getAnak1();
        $this->load->view('Template/Header2');
        $this->load->view('Anak/Index',$data);
        $this->load->view('Template/Footer2');
    }
    
    public function tamu()
    {
        $data['anak'] = $this->Anak_Model->getAnak2();
        $this->load->view('Template/Header2');
        $this->load->view('Anak/Tamu',$data);
        $this->load->view('Template/Footer2');
    }

     // Proses Tambah Data Warga Asli
     public function tambah()
    {
        $dariDB = $this->Anak_Model->cekkodeanak();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 5, 5);
        $Id_Anak = $nourut + 1;
        $data = array('Id_Anak' => $Id_Anak);

        $this->form_validation->set_rules('NIK','NIK','required');
        $this->form_validation->set_rules('Anak_Ke','Anak_Ke','required');
        $this->form_validation->set_rules('Nama_Anak','Nama Anak','required');
        $this->form_validation->set_rules('Tempat_Lahir','Tempat Lahir','required');
        $this->form_validation->set_rules('Nama_Ibu','Nama Ibu','required');
        $this->form_validation->set_rules('Nama_Ayah','Nama Ayah','required');

        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Template/Header2');
        $this->load->view('Anak/tambah',$data);
        $this->load->view('Template/Footer2');
        } else {
            $this->Anak_Model->tambahAnak();
            redirect('Anak');
        }
    }

     // Proses Tambah Data Warga Tamu
     public function tambah2()
    {
        $dariDB = $this->Anak_Model->cekkodeanak();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 5, 5);
        $Id_Anak = $nourut + 1;
        $data = array('Id_Anak' => $Id_Anak);

        $this->form_validation->set_rules('NIK','NIK','required');
        $this->form_validation->set_rules('Anak_Ke','Anak Ke','required');
        $this->form_validation->set_rules('Nama_Anak','Nama Anak','required');
        $this->form_validation->set_rules('Tempat_Lahir','Tempat Lahir','required');
        $this->form_validation->set_rules('Nama_Ibu','Nama Ibu','required');
        $this->form_validation->set_rules('Nama_Ayah','Nama Ayah','required');

        if( $this->form_validation->run() == FALSE) 
        {
        $this->load->view('Template/Header2');
        $this->load->view('Anak/Tambah2',$data);
        $this->load->view('Template/Footer2');
        } else {
            $this->Anak_Model->tambahAnak2();
            redirect('Anak/Tamu');
        }
    }

    public function hapus($id)
   {
       $this->Anak_Model->hapusAnak($id);
       redirect('Anak');
   }
   
   public function edit($id)
   {
       $data['anak'] = $this->Anak_Model->getAnakDetail($id);
       $data['Jenis_Kelamin'] = ['Perempuan', 'Laki-Laki'];
       $data['RT'] = ['001', '002', '003', '004', '005'];
       $this->form_validation->set_rules('NIK', 'NIK', 'required');
       $this->form_validation->set_rules('Nama_Anak', 'Nama Anak', 'required');
       $this->form_validation->set_rules('Tempat_Lahir', 'Tempat Lahir', 'required');
       $this->form_validation->set_rules('Nama_Ibu', 'Nama Ibu', 'required');
       $this->form_validation->set_rules('Nama_Ayah', 'Nama Ayah', 'required');
       $this->form_validation->set_rules('Alamat', 'Nama Ibu', 'required');
       $this->form_validation->set_rules('Umur', 'Umur', 'required');
       $this->form_validation->set_rules('Rt', 'Nama Ayah', 'required');
       $this->form_validation->set_rules('Desa', 'Alamat ', 'required');
       $this->form_validation->set_rules('Kecamatan', 'Alamat ', 'required');
       $this->form_validation->set_rules('Kabupaten', 'Alamat ', 'required');
       $this->form_validation->set_rules('Provinsi', 'Alamat ', 'required');
       
       if( $this->form_validation->run() == FALSE) 
       {
       $this->load->view('Template/Header2');
       $this->load->view('Anak/Edit', $data);
       $this->load->view('Template/Footer2');
       } else {
          $this->Anak_Model->ubahAnak();
          redirect('Anak');
       }
   }

   public function ubah($id)
   {
       $data['anak'] = $this->Anak_Model->getAnakDetail2($id);
       $data['Jenis_Kelamin'] = ['Perempuan', 'Laki-Laki'];
       $data['RT'] = ['001', '002', '003', '004', '005'];
       $this->form_validation->set_rules('Nama_Anak', 'Nama Anak', 'required');
       $this->form_validation->set_rules('Tempat_Lahir', 'Tempat Lahir', 'required');
       $this->form_validation->set_rules('Nama_Ibu', 'Nama Ibu', 'required');
       $this->form_validation->set_rules('Nama_Ayah', 'Nama Ayah', 'required');
       $this->form_validation->set_rules('Alamat', 'Nama Ibu', 'required');
       $this->form_validation->set_rules('Umur', 'Umur', 'required');
       $this->form_validation->set_rules('Rt', 'Nama Ayah', 'required');
       $this->form_validation->set_rules('Desa', 'Alamat ', 'required');
       $this->form_validation->set_rules('Kecamatan', 'Alamat ', 'required');
       $this->form_validation->set_rules('Kabupaten', 'Alamat ', 'required');
       $this->form_validation->set_rules('Provinsi', 'Alamat ', 'required');
       
       if( $this->form_validation->run() == FALSE) 
       {
       $this->load->view('Template/Header2');
       $this->load->view('Anak/Ubah', $data);
       $this->load->view('Template/Footer2');
       } else {
          $this->Anak_Model->ubahAnak();
          redirect('Anak/Tamu');
       }
   }

   public function detail($id)
   {
        $data['anak'] = $this->Anak_Model->getAnakDetail($id);
        $this->load->view('Template/Header2', $data);
        $this->load->view('Anak/Detail', $data);
        $this->load->view('Template/Footer2');
   }

}
