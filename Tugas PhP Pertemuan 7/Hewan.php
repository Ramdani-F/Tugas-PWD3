<?php
class Hewan {
    private $nama;
    private $umur;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function getUmur() {
        return $this->umur;
    }
}


class Kucing extends Hewan {
    public function getSuara() {
        return "Meow";
    }
}


class Anjing extends Hewan {
    public function getSuara() {
        return "Guk guk";
    }
}


// Objek Kucing
$kucing = new Kucing();
$kucing->setNama("Tom");
$kucing->setUmur(3);

// Objek Anjing
$anjing = new Anjing();
$anjing->setNama("Rex");
$anjing->setUmur(5);

echo "<h2>Data Hewan</h2>";

echo "Nama: " . $kucing->getNama() . "<br>";
echo "Umur: " . $kucing->getUmur() . " tahun<br>";
echo "Jenis: Kucing<br>";
echo "Suara: " . $kucing->getSuara() . "<br><br>";

echo "Nama: " . $anjing->getNama() . "<br>";
echo "Umur: " . $anjing->getUmur() . " tahun<br>";
echo "Jenis: Anjing<br>";
echo "Suara: " . $anjing->getSuara() . "<br>";