<?php
class Produk{ 
    //property
    public string $Kode;
    public string $Nama;
    public int $Harga;
    public int $Stok;
    public const PAJAK = 0.11;
    public function __construct($kode, $Nama, $Harga, $Stok) {
        $this->Kode = $kode;
        $this->Nama = $Nama;
        $this->Harga = $Harga;
        $this->Stok = $Stok;
        }
    public function pajak(){
        return self::PAJAK * 100;
    }
    
        function total(){   
        return $this->Harga + ($this->Harga * self::PAJAK);
    }
}
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