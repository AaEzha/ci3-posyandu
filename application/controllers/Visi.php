<?php

class Visi extends CI_Controller{

    // Index Visi
    public function index()
    {
        $data['visi']=$this->Visi_Model->getArtikel();
        $data['misi']=$this->Visi_Model->getArtikel2();
        $this->load->view('Template/Header');
        $this->load->view('Visi/Index',$data);
        $this->load->view('Template/Footer');
    }

    public function edit($id)
   {
        $data['visi']=$this->Visi_Model->getVisiDet($id);
        $data['misi']=$this->Visi_Model->getMisiDet($id);
        $this->form_validation->set_rules('Judul_Artikel', 'Judul Artikel ', 'required');
        $this->form_validation->set_rules('Isi_Artikel', 'Isi Artikel ', 'required');
       
       if( $this->form_validation->run() == FALSE) 
       {
       $this->load->view('Template/Header');
       $this->load->view('Visi/Edit',$data);
       $this->load->view('Template/Footer');
       } else {
          $this->Visi_Model->ubahVM();
          redirect('Visi');
       }
   }
    
    // Penutup Index

    //

}
