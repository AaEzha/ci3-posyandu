<?php

class Hamil extends CI_Controller{

    // Index Home
    public function index()
    {
        $data['hamil'] = $this->Hamil_Model->getalldata();
        $this->load->view('Template/Header3');
        $this->load->view('Hamil/Index',$data);
        $this->load->view('Template/Footer3');
    }
    // Penutup Index

}
