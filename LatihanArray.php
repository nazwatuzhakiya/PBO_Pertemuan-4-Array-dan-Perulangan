<?php

class Mahasiswa {
    public $nama;
    public $kelas;
    public $mataKuliah;
    private $nilai;

    public function __construct($nama, $kelas, $mataKuliah, $nilai) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
    }

    public function setNilai($nilai) {
        $this->nilai = $nilai;
    }

    public function getNilai() {
        return $this->nilai;
    }
}

$dataMahasiswa = [
    new Mahasiswa("Aditya", "SI 2", "Pemrograman Berorientasi Objek", 80),
    new Mahasiswa("Shinta", "SI 2", "Pemrograman Berorientasi Objek", 75),
    new Mahasiswa("Ineu", "SI 2", "Pemrograman Berorientasi Objek", 55),
];

foreach ($dataMahasiswa as $mahasiswa) {
    echo "Nama : " . $mahasiswa->nama . "<br>";
    echo "Kelas : " . $mahasiswa->kelas . "<br>";
    echo "Mata Kuliah : " . $mahasiswa->mataKuliah . "<br>";
    echo "Nilai : " . $mahasiswa->getNilai() . "<br>";
    if ($mahasiswa->getNilai() >= 70) {
        echo "Lulus Kuis<br>";
    } else {
        echo "Tidak Lulus Kuis<br>";
    }
    echo "<hr>";
}

?>