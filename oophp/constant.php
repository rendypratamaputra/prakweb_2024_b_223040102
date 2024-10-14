<?php 

// Mendefinisikan konstanta
define('NAMA', 'Rendy');
echo NAMA;  // Output: Rendy

echo "<br>";

// Mendefinisikan konstanta kelas
const UMUR = 20;
echo UMUR;  // Output: 20
echo "<hr>";

// Kelas Coba
class Coba {
    const NAMA = 'Rendy';  // Konstanta dalam kelas
}

// Mengoutput konstanta dari kelas Coba
echo Coba::NAMA;  // Output: Rendy
echo "<hr>";

// Mengoutput konstanta ajaib
echo __LINE__;  // Output: Nomor baris dari kode ini
echo "<br>";
echo __FILE__;  // Output: Path dan nama file lengkap
echo "<br>";
echo __DIR__;   // Output: Direktori file
echo "<br>";

// Fungsi untuk mengembalikan nama fungsi
function coba() {
    return __FUNCTION__;  // Mengembalikan nama fungsi
}

// Mengoutput hasil dari fungsi coba
echo coba();  // Output: coba
echo "<hr>";

// Kelas Coba2
class Coba2 {
    public $kelas;

    // Konstruktor untuk mengatur nama kelas
    public function __construct() {
        $this->kelas = __CLASS__; // Mengatur nama kelas di dalam konstruktor
    }
}

// Membuat objek dari kelas Coba2
$obj = new Coba2;
echo $obj->kelas; // Output: Coba2
?>