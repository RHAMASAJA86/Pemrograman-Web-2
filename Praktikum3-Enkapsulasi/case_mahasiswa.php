<?php

class Mahasiswa {
    private $nim;
    private $nama;
    private $prodi;
    private $nilai;

    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function setNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            echo "Nilai tidak valid.<br>";
        }
    }

    public function getNim() {
        return $this->nim;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getProdi() {
        return $this->prodi;
    }

    public function getNilai() {
        return $this->nilai;
    }
}

$mhs1 = new Mahasiswa(
    "2301001",
    "Andi",
    "Sistem Informasi"
);
$mhs1->setNilai(85);
echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Prodi: " . $mhs1->getProdi() . "<br>";
echo "Nilai: " . $mhs1->getNilai();
?>