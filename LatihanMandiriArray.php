<?php

class AngsuranKredit {
    private $pokokPinjaman;
    private $bunga;
    private $lamaAngsuran;

    public function __construct($pokokPinjaman, $bunga, $lamaAngsuran) {
        $this->pokokPinjaman = $pokokPinjaman;
        $this->bunga = $bunga;
        $this->lamaAngsuran = $lamaAngsuran;
    }

    public function getPokokPinjaman() {
        return $this->pokokPinjaman;
    }

    public function getBunga() {
        return $this->bunga;
    }

    public function getLamaAngsuran() {
        return $this->lamaAngsuran;
    }
}

$pinjaman = 1000000;
$bunga = 10;
$lamaAngsuran = 5;

echo "Latihan 4<br>";
echo "TOKO PEGADAIAN SYARIAH<br>";
echo "Jl Keadilan No 16<br>";
echo "Telp 732746238<br>";
echo "Program Penghitung Besaran Angsuran Hutang<br>";
echo "Besaran Pinjaman : Rp." . number_format($pinjaman, 0, ',', '.') . "<br>";
echo "Masukan Besaran Bunga (%) : " . $bunga . "<br>";
echo "Lama Angsuran (bulan) : " . $lamaAngsuran . "<br>";

$pokokAngsuran = $pinjaman / $lamaAngsuran;
$besaranBunga = ($pinjaman * $bunga / 100);

for ($i = 1; $i <= $lamaAngsuran; $i++) {
    $bungaAngsuran = ($lamaAngsuran - $i) * ($besaranBunga / ($lamaAngsuran - 1));
    $totalAngsuran = $pokokAngsuran + $bungaAngsuran;
    
    $namaAngsuran = "";
    switch ($i) {
        case 1:
            $namaAngsuran = "pertama";
            break;
        case 2:
            $namaAngsuran = "kedua";
            break;
        case 3:
            $namaAngsuran = "ketiga";
            break;
        case 4:
            $namaAngsuran = "keempat";
            break;
        case 5:
            $namaAngsuran = "kelima";
            break;
        default:
            $namaAngsuran = "ke-" . $i;
            break;
    }
    
    echo "Angsuran " . $namaAngsuran . " : " . number_format($pokokAngsuran, 0, ',', '.') . " + " . number_format($bungaAngsuran, 0, ',', '.') . " = " . number_format($totalAngsuran, 0, ',', '.') . "<br>";
}

?>