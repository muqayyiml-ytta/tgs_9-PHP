<?php

class Mobil
{
    public $merk;

    public function infoMobil()
    {
        echo "Merk Mobil: " . $this->merk . "<br>";
    }
}

// Membuat objek pertama
$mobil1 = new Mobil();
$mobil1->merk = "Toyota";

// Membuat objek kedua
$mobil2 = new Mobil();
$mobil2->merk = "Honda";

// Menampilkan informasi mobil
$mobil1->infoMobil();
$mobil2->infoMobil();
