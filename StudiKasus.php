<?php
class BangunRuang {
    private $nama;
    private $sisi;
    private $jari;
    private $tinggi;

    public function __construct($nama, $sisi, $jari, $tinggi) {
        $this->nama = $nama;
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
    }
    public function getNama() { return $this->nama; }
    public function getSisi() { return $this->sisi; }
    public function getJari() { return $this->jari; }
    public function getTinggi() { return $this->tinggi; }
    public function getVolume() {
        $pi = 3.14; // pakai π = 3.14 biar sama persis dengan soal
        switch ($this->nama) {
            case "Bola":
                return (4/3) * $pi * pow($this->jari, 3);
            case "Kerucut":
                return (1/3) * $pi * pow($this->jari, 2) * $this->tinggi;
            case "Limas Segi Empat":
                return (1/3) * pow($this->sisi, 2) * $this->tinggi;
            case "Kubus":
                return pow($this->sisi, 3);
            case "Tabung":
                return $pi * pow($this->jari, 2) * $this->tinggi;
            default:
                return 0;
        }
    }
}

$bangunRuang = [
    new BangunRuang("Bola", 0, 7, 0),
    new BangunRuang("Kerucut", 0, 14, 10),
    new BangunRuang("Limas Segi Empat", 8, 0, 24),
    new BangunRuang("Kubus", 30, 0, 0),
    new BangunRuang("Tabung", 0, 7, 10)
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
      </tr>";

foreach ($bangunRuang as $b) {
    echo "<tr>";
    echo "<td>".$b->getNama()."</td>";
    echo "<td>".$b->getSisi()."</td>";
    echo "<td>".$b->getJari()."</td>";
    echo "<td>".$b->getTinggi()."</td>";
    echo "<td>".$b->getVolume()."</td>";
    echo "</tr>";
}

echo "</table>";
?>
