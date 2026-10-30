<?php
namespace PBO\marketplace;  
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
