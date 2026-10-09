<?php
class Produk{ 
    //property
    public string $Kode;
    public string $Nama;
    public int $Harga;
    public int $Stok;
    public const PAJAK = 0.11;
}
//objek
$Produk = new Produk();
$Produk->Kode = 'P0001';
$Produk->Nama = 'Laptop';
$Produk->Harga = 10000000;
$Produk->Stok = 5;

//hitung pajak
$Pajak = Produk::PAJAK * 100;
$JumlahPajak = $Produk->Harga * Produk::PAJAK;

//total
$total = $Produk ->Harga + $JumlahPajak;

//timpa
$Harga = "Rp" . number_format($Produk->Harga, 0, ',', '.');
$Total = "Rp" . number_format($total, 0, ',', '.');

//hasil
echo  "Produk : ". $Produk->Nama;
echo "<br>";
echo  "Harga : ". $Harga;
echo "<br>";
echo  "Stok : ". $Produk->Stok;
echo "<br>";
echo  "Pajak : ". $Pajak."%";
echo "<br>";
echo "Total harga setelah pajak: " . $Total;