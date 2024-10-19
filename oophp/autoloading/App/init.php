<?php 

// require_once 'Produk/InfoProduk.php';
 //require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

//yg atas manual yg bawah autoload

spl_autoload_register(function($class){ //autoload
    require_once 'Produk/' . $class . '.php.'; //manggil semua class dalem folder produk
});