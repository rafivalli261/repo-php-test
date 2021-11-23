<?php

use Coba as GlobalCoba;

define("NAMA","Rafi Valli");
//tidak bisa disimpan dalam kelas
echo NAMA;

echo "<hr>";

const UMUR = 20;
//bisa dimasukkan dalam kelas
echo UMUR;

echo "<hr>";

class Coba {
    const JUDUL = "Eleceed";
}

echo Coba::JUDUL;

// Magic constant
// __LINE__
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// dkk
echo "<hr>";

echo __FILE__;



?>