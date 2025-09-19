<?php
class Kendaraan {
    private $merek, $jmlroda, $harga, $warna, $bhnBakar, $tahun;
    public function setMerek($merek) { $this->merek = $merek; }
    public function getMerek() { return $this->merek; }
    public function setJmlroda($jmlroda) { $this->jmlroda = $jmlroda; }
    public function getJmlroda() { return $this->jmlroda; }
    public function setHarga($harga) { $this->harga = $harga; }
    public function getHarga() { return $this->harga; }
    public function setWarna($warna) { $this->warna = $warna; }
    public function getWarna() { return $this->warna; }
    public function setBhnBakar($bhnBakar) { $this->bhnBakar = $bhnBakar; }
    public function getBhnBakar() { return $this->bhnBakar; }
    public function setTahun($tahun) { $this->tahun = $tahun; }
    public function getTahun() { return $this->tahun; }
    public function statusHarga() {
        return ($this->harga > 100000000) ? "Mahal" : "Terjangkau";
    }
    public function dapatSubsidi() {
        return ($this->bhnBakar == "Solar" || $this->bhnBakar == "Premium") ? "Dapat Subsidi" : "Tidak Dapat Subsidi";
    }
    public function hargaSecondKendaraan() {
        $umur = date("Y") - $this->tahun;
        return $this->harga - ($umur * 1000000);
    }
}
// Data kendaraan
$Data1 = array('Toyota Yaris', '4', '160000000', 'Merah', 'Pertamax', '2014');
$Data2 = array('Honda Scoopy', '2', '13000000', 'Putih', 'Premium', '2005');
$Data3 = array('Isuzu Panther', '4', '40000000', 'Hitam', 'Solar', '1994');

for ($i = 1; $i <= 3; $i++) {
    ${"kendaraan" . $i} = new Kendaraan();
    ${"kendaraan" . $i}->setMerek(${"Data" . $i}[0]);
    ${"kendaraan" . $i}->setJmlroda(${"Data" . $i}[1]);
    ${"kendaraan" . $i}->setHarga(${"Data" . $i}[2]);
    ${"kendaraan" . $i}->setWarna(${"Data" . $i}[3]);
    ${"kendaraan" . $i}->setBhnBakar(${"Data" . $i}[4]);
    ${"kendaraan" . $i}->setTahun(${"Data" . $i}[5]);
}

for ($i = 1; $i <= 3; $i++) {
    echo "Kendaraan " . $i . "<br>";
    echo ${"kendaraan" . $i}->getMerek() . "<br>";
    echo ${"kendaraan" . $i}->getJmlroda() . "<br>";
    echo ${"kendaraan" . $i}->getHarga() . "<br>";
    echo ${"kendaraan" . $i}->getWarna() . "<br>";
    echo ${"kendaraan" . $i}->getBhnBakar() . "<br>";
    echo ${"kendaraan" . $i}->getTahun() . "<br>";
    echo ${"kendaraan" . $i}->statusHarga() . "<br>";
    echo ${"kendaraan" . $i}->dapatSubsidi() . "<br>";
    echo ${"kendaraan" . $i}->hargaSecondKendaraan() . "<br><br>";
}
?>
