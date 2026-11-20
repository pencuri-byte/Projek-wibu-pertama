<?php 

require('./PropertyConstant.php');
use PBO\marketplace\Produk;
//objek
$Produk = new Produk();
$Produk ->setKode('P0001')->setNama('laptop')->setHarga(10000000)->setStok(5);
// $Produk->Kode = 'P0001';
// $Produk->Nama = 'Laptop';
// $Produk->Harga = 10000000;
// $Produk->Stok = 5;


//timpa
// $Harga = "Rp" . number_format($Produk->getHarga(), 0, ',', '.');
// $Total = "Rp" . number_format($Produk->total(), 0, ',', '.');

//hasil
echo  "Produk : ". $Produk->getNama();
echo "<br>";
echo  "Harga : ". $Produk->getHarga();
echo "<br>";
echo  "Stok : ". $Produk->getStok();
echo "<br>";
echo  "Pajak : ". $Produk->pajak(). "%";
echo "<br>";
echo "Total harga setelah pajak: " . $Produk->total();
