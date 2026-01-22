<?php

class Mahasiswa
{
    public $nama;

    public function tampilkanNama()
    {
        echo "Nama Mahasiswa: " . $this->nama;
    }
}

// Membuat objek
$mhs = new Mahasiswa();
$mhs->nama = "Ahmad";

// Menampilkan nama
$mhs->tampilkanNama();
