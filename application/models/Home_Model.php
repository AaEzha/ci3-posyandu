<?php

class Home_Model extends CI_Model{
 
    function getArtikel(){
        $this->db->select('*');
        $this->db->from('artikel');
        $kode_artikel = array(2,3,4,5,6);
        $this->db->where_not_in('Kode_Artikel', $kode_artikel);
        return $this->db->get()-> result();
    }

    function getArtikel2(){
        $this->db->select('*');
        $this->db->from('artikel');
        $kode_artikel = array(1,3,4,5,6);
        $this->db->where_not_in('Kode_Artikel', $kode_artikel);
        return $this->db->get()-> result();
    }

    function getArtikel3(){
        $this->db->select('*');
        $this->db->from('artikel');
        $kode_artikel = array(1,2,4,5,6);
        $this->db->where_not_in('Kode_Artikel', $kode_artikel);
        return $this->db->get()-> result();
    }

    function getArtikel4(){
        $this->db->select('*');
        $this->db->from('artikel');
        $kode_artikel = array(1,2,3,5,6);
        $this->db->where_not_in('Kode_Artikel', $kode_artikel);
        return $this->db->get()-> result();
    }
    
    public function getHomeDet1($id)
    {
        return $this->db->get_where('artikel', ['Kode_Artikel' => $id])->row_array();
    }
    public function getHomeDet2($id)
    {
        return $this->db->get_where('artikel', ['Kode_Artikel' => $id])->row_array();
    }
    public function getHomeDet3($id)
    {
        return $this->db->get_where('artikel', ['Kode_Artikel' => $id])->row_array();
    }
    public function getHomeDet4($id)
    {
        return $this->db->get_where('artikel', ['Kode_Artikel' => $id])->row_array();
    }

    //
    public function ubahHome()
    {
        $data = [
            "Judul_Artikel" => $this->input->post('Judul_Artikel', true),
            "Isi_Artikel" => $this->input->post('Isi_Artikel', true)
        ];
        $this->db->where('Kode_Artikel', $this->input->post('id'));
        $this->db->update('artikel', $data);
    }

}