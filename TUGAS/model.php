<?php

class Model {
    
    private $dataBuku = [
        ["judul" => "Laskar Pelangi", "pengarang" => "Andrea Hirata", "tahun" => 2005],
        ["judul" => "Bumi Manusia", "pengarang" => "Pramoedya Ananta Toer", "tahun" => 1980],
        ["judul" => "Negeri 5 Menara", "pengarang" => "Ahmad Fuadi", "tahun" => 2009],
        ["judul" => "Sang Pemimpi", "pengarang" => "Andrea Hirata", "tahun" => 2006]
    ];

    // Mengambil semua data buku
    public function getDataBuku() {
        return $this->dataBuku;
    }
}
?>
