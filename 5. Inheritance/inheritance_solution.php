<?php
class Produk

{
  public  $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0, $jmlHalaman = 0, $waktuMain = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->judul = $judul;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} , {$this->getLabel()} , (Rp. {$this->harga})";

    return $str;
  }
}

// =================================Awal Inheritance=========================================
class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} , {$this->getLabel()} , (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul}, {$this->getLabel()}, (Rp. {$this->harga} ~ {$this->waktuMain} Jam.";
    return $str;
  }
}
// =================================Akhir Inheritance=========================================

// Type OBJECT
class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shohen Jump", 30000, 100, 0);

$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 20000, 0, 50);

// yang diharapkan
// Komik : Naruto | Mashasi Kishimoto, Shohen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 20000) ~ 50 Jam.

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
