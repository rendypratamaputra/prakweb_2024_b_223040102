<?php 
//produk :
    //komik
    //game

    //Produk
class produk{
    public  $judul,
            $penulis,
            $penerbit;
    protected $diskon=0;
    private  $harga;
          

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon/100);
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = " {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        

        return $str;
    }
}

//Komik
class komik extends produk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
        parent::__construct($judul , $penulis  , $penerbit  , $harga );
        $this->jmlHalaman = $jmlHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : ".parent::getInfoProduk()." - {$this-> jmlHalaman} Halaman.";
        return $str;
    }
}

//Game
class game extends produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
        parent::__construct($judul  , $penulis  , $penerbit  , $harga );
        $this->waktuMain = $waktuMain;
    }

     public function setDiscount($diskon){
        $this->diskon = $diskon;
     }
    public function getInfoProduk()
    {
        $str = "Game : ".parent::getInfoProduk()." ~ {$this-> waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul } | {$produk -> getLabel()}  {$produk -> harga}";
        return $str;
    }
}


$produk1 = new komik("Naruto","Masashi Kishimoto","Shonen Jump",30000, 11);
$produk2 = new game("Uncharted","Neil Druckmann","Sony Computer",25000, 50);



echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiscount(50);
echo $produk2->getHarga (); 
?>