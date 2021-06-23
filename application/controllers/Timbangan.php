<?php

class Timbangan extends CI_Controller{

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
        $data['anak'] = $this->Timbang_Model->getData($id);
        $this->load->view('Template/Header2');
        $this->load->view('Timbangan/Tambah');
        $this->load->view('Template/Footer2');
        
    }
    

}