<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $prodi;
    public $nilai;

    public function tentukanGrade()
    {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }

    public function tampilkanData()
    {
        echo "NIM : " . $this->nim . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Prodi : " . $this->prodi . "<br>";
        echo "Nilai : " . $this->nilai . "<br>";
        echo "Grade : " . $this->tentukanGrade() . "<br>";
    }
}

$mhs1 = new Mahasiswa();
$mhs1->nim = "24001";
$mhs1->nama = "Andi";
$mhs1->prodi = "Sistem Informasi";
$mhs1->nilai = 85;

$mhs2 = new Mahasiswa();
$mhs2->nim = "24002";
$mhs2->nama = "Budi";
$mhs2->prodi = "Sistem Informasi";
$mhs2->nilai = 72;

$mhs3 = new Mahasiswa();
$mhs3->nim = "24003";
$mhs3->nama = "Putra";
$mhs3->prodi = "Sistem Informasi";
$mhs3->nilai = 65;

echo "<h3>Mahasiswa 1</h3>";
$mhs1->tampilkanData();


echo "<h3>Mahasiswa 2</h3>";
$mhs2->tampilkanData();


echo "<h3>Mahasiswa 3</h3>";
$mhs3->tampilkanData();
?>