<?php 

class Produk 
{
    // Mendefinisikan class Produk
    private  $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;


    // Konstruktor untuk menginisialisasi objek Produk

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) 
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //setter dan getter
    public function setjudul($judul){ 
        $this->judul = $judul;
    }
    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }
    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }
    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }
    public function getDiskon(){
        return $this->diskon;
    }
    

    // Metode untuk mendapatkan label Produk
    public function getLabel() 
    {
        return "$this->penulis, $this->penerbit";
    }

    // Metode untuk mendapatkan informasi Produk
    public function getInfoProduk() 
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->getHarga()})";
        return $str;
    }
}

// Kelas untuk mencetak informasi Produk
class CetakInfoProduk 
{
    // Metode untuk mencetak info Produk dari kelas Produk
    public function cetak(Produk $produk) 
    {
        $str  = "{$produk->judul} | {$produk->getLabel()}, (Rp. {$produk->getHarga()})";
        return $str;
    }
}

// Kelas Komik: Subkelas untuk Produk Komik
class Komik extends Produk 
{
    public $jumlahHalaman;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) 
    {
        // Memanggil konstruktor parent untuk inisialisasi nilai
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jmlHalaman;
    }

    // Metode untuk mendapatkan informasi Produk
    public function getInfoProduk() 
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman";
        return $str;
    }
}

// Kelas Game: Subkelas untuk Produk Game
class Game extends Produk 
{
    public $waktuMain;

    public function __construct($judul = "Judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) 
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() 
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
}

// Membuat instance Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

echo $produk1->getJudul();