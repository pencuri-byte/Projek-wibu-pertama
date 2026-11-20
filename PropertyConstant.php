<?php
namespace PBO\marketplace;  
class Produk{ 
    //property
    private string $Kode;
    private string $Nama;
    private int $Harga;
    private int $Stok;
    private const PAJAK = 0.11;
    public function __construct(){  
    }

    //setter
    public function setKode($Kode){
        $this->Kode = $Kode;
        return $this;
    }
    public function setNama($Nama){
        $this->Nama = $Nama;
        return $this;
    }
    public function setHarga($Harga){
        if($Harga <= 0){echo "harga tidak boleh kosong";
        exit();
        }
        $this->Harga = $Harga;
        return $this;
    }
    public function setStok($Stok){
        if($Stok <= 0){echo "Stok tidak boleh kosong";
        exit();
        }
        $this->Stok = $Stok;
        return $this;
    }

    #getter
    public function getKode(){
        return $this->Kode;
    }
    public function getNama(){
        return $this->Nama;
    }
    public function getHarga(){
        return $this->Harga;
    }
    public function getStok(){
        return $this->Stok;
    }
    
    public function pajak(){
        return self::PAJAK * 100;
    }
    
        function total(){   
        return $this->Harga + ($this->Harga * self::PAJAK);
    }
}
