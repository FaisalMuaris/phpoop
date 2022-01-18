<?php

// define('NAMA', 'Faisal Muaris');

// echo NAMA;


// const UMUR = 22;
// echo "<br>";
// echo UMUR;

// class Coba
// {
//   const NAMA = "Faisal Muaris";
// }

// echo Coba::NAMA;

// echo __LINE__;


// function coba()
// {
//   return __FUNCTION__;
// }

// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
