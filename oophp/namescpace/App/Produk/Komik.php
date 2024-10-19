<?php 

class Komik extends Produk implements InfoProduk
{
    public $jumlahHalaman;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) 
    {
        // Memanggil konstruktor parent untuk inisialisasi nilai
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jmlHalaman;
    }

    public function getInfo() 
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})";
        return $str;
    }

    // Metode untuk mendapatkan informasi Produk
    public function getInfoProduk() 
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} Halaman";
        return $str;
    }
}