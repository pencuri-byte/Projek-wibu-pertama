<?php 

require('./PropertyConstant.php');
use PBO\marketplace\Produk;
//objek
$Produk = new Produk('P0001', 'Laptop', 10000000, 5 );
// $Produk->Kode = 'P0001';
// $Produk->Nama = 'Laptop';
// $Produk->Harga = 10000000;
// $Produk->Stok = 5;


//timpa
$Harga = "Rp" . number_format($Produk->Harga, 0, ',', '.');
$Total = "Rp" . number_format($Produk->total(), 0, ',', '.');

//hasil
echo  "Produk : ". $Produk->Nama;
echo "<br>";
echo  "Harga : ". $Harga;
echo "<br>";
echo  "Stok : ". $Produk->Stok;
echo "<br>";
echo  "Pajak : ". $Produk->pajak(). "%";
echo "<br>";
echo "Total harga setelah pajak: " . $Produk->total();
