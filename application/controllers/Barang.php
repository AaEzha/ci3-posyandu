<?php
class Barang extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('barang_model');
    }
 
    public function index()
    {
        $dariDB = $this->barang_model->cekkodebarang();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        $nourut = substr($dariDB, 3, 4);
        $kodeBarangSekarang = $nourut + 1;
        $data = array('kode_barang' => $kodeBarangSekarang);
        $this->load->view("barang", $data);
    }
 
    public function simpan()
    {
        $this->barang_model->simpan();
        redirect('Barang');
    }
}