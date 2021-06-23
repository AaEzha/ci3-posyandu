<?php
class Barang_model extends CI_Model {
 
        public $kode_barang;
        public $nama_barang;
 
    public function __construct()
    {
        $this->load->database();
    }
 
    public function cekkodebarang()
    {
        $query = $this->db->query("SELECT MAX(kode_barang) as kodebarang from barang");
        $hasil = $query->row();
        return $hasil->kodebarang;
    }
 
    public function simpan()
    {
        $this->kode_barang    = $_POST['kodebarang'];
        $this->nama_barang  = $_POST['namabarang'];
        $this->db->insert('barang', $this);
    }
}