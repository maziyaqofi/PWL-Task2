<?php

// Maziya Ats Tsaqofi
// 1 April 2025

class Mahasiswa {
    public $nim;
    public $nama;

    public function setData ($nim, $nama) {
        $this -> nim = $nim;
        $this -> nama = $nama;
    }

    public function getData() {
        return "NIM: $this->nim <br> Nama: $this->nama";
    }
}
?>