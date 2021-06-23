<?php

class Visi_Model extends CI_Model{
 
    function getArtikel(){
        $this->db->select('*');
        $this->db->from('artikel');
        $kode_artikel = array(1,2,3,4,6);
        $this->db->where_not_in('Kode_Artikel', $kode_artikel);
        return $this->db->get()-> result();
    }

    function getArtikel2(){
        $this->db->select('*');
        $this->db->from('artikel');
        $kode_artikel = array(1,2,3,4,5);
        $this->db->where_not_in('Kode_Artikel', $kode_artikel);
        return $this->db->get()-> result();
    }

    public function getVisiDet($id)
    {
        return $this->db->get_where('artikel', ['Kode_Artikel' => $id])->row_array();
    }
    public function getMisiDet($id)
    {
        return $this->db->get_where('artikel', ['Kode_Artikel' => $id])->row_array();
    }

    public function ubahVM()
    {
        $data = [
            "Judul_Artikel" => $this->input->post('Judul_Artikel', true),
            "Isi_Artikel" => $this->input->post('Isi_Artikel', true)
        ];
        $this->db->where('Kode_Artikel', $this->input->post('id'));
        $this->db->update('artikel', $data);
    }

}