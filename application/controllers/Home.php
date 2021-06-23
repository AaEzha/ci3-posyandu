<?php

class Home extends CI_Controller{

    // Index Home
    public function index()
    {
        $data['Home']=$this->Home_Model->getArtikel();
        $data['home']=$this->Home_Model->getArtikel2();
        $data['HOME']=$this->Home_Model->getArtikel3();
        $data['HoMe']=$this->Home_Model->getArtikel4();
        $this->load->view('Template/Header');
        $this->load->view('Home/Index',$data);
        $this->load->view('Template/Footer');
    }

    public function edit($id)
   {
        $data['Home']=$this->Home_Model->getHomeDet1($id);
        $data['home']=$this->Home_Model->getHomeDet2($id);
        $data['HOME']=$this->Home_Model->getHomeDet3($id);
        $data['HoMe']=$this->Home_Model->getHomeDet4($id);
        $this->form_validation->set_rules('Judul_Artikel', 'Judul Artikel ', 'required');
        $this->form_validation->set_rules('Isi_Artikel', 'Isi Artikel ', 'required');
       
       if( $this->form_validation->run() == FALSE) 
       {
       $this->load->view('Template/Header');
       $this->load->view('Home/Edit',$data);
       $this->load->view('Template/Footer');
       } else {
          $this->Home_Model->ubahHome();
          redirect('Home');
       }
   }
    
    // Penutup Index

    //

}
