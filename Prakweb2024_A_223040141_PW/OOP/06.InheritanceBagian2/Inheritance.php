<?php

class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;


    // Constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "
     penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // Method
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        // komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman.
        $str = " {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ";
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoKomik()
    {
        $str = "Komik : {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoGame()
    {
        $str = "Game : {$this->getInfoProduk()} - {$this->waktuMain} Jam.";
        return $str;
    }
}


class CetakInfoProduk
{
    public function cetak($produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);


echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();
