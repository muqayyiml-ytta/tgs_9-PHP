<?php

class Buku
{
    public $judul;
    public $pengarang;

    public function __construct($judul, $pengarang)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
    }

    public function infoBuku()
    {
        echo "Judul Buku: {$this->judul}<br>";
        echo "Pengarang: {$this->pengarang}";
    }
}

// Membuat objek
$buku = new Buku("Pemrograman PHP", "Budi Santoso");

// Menampilkan info buku
$buku->infoBuku();
