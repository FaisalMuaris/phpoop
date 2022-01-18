<?php

class Mobil
{

  public $nama = 'Avanza',
    $warna = 'Merah',
    $tipe = 'Toyota';

  public function getMobil()
  {
    return "$this->tipe, $this->warna";
  }
}

$produk1 = new Mobil();
var_dump($produk1);

// Menimpah data yang ada di property

$produk2  = new Mobil();
$produk2->nama = "Alphard";
$produk2->warna = "Biru";

echo "Mobil : " . $produk2->getMobil();
