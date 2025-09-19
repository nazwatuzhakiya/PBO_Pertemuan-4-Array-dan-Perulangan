<?php
class Warung {
    public $barang;
    public $harga;
    public $jumlah;

    public function __construct($barang){
        $this->barang = $barang;
    }

    public function tampilBarang(){
        foreach ($this->barang as $nama => $harga){
            echo "Barang: $nama, Harga: $harga <br>";
        }
    }
}

$barang = [
    "kopi" => 5000,
    "roti" => 3000
];

$makanan = new Warung($barang);
$makanan->tampilBarang();
?>