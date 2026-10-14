<?php

class Mahasiswa {
    private $nim;
    private $nama;
    private $prodi;
    private $nilai;
    private $semester;

    public function __construct($nim, $nama, $prodi) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }

    public function setNilai($nilai) {
        if ($nilai >= 0 && $nilai <= 100) {
            $this->nilai = $nilai;
        } else {
            echo "Nilai harus antara 0 sampai 100.<br>";
        }
    }

    public function setSemester($semester) {
        $this->semester = $semester;
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

    public function getSemester() {
        return $this->semester;
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function tentukanGrade() {
        if ($this->nilai === null) {
            return "Belum ada nilai";
        } elseif ($this->nilai >= 80) {
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
}

$mhs1 = new Mahasiswa(
    "2301001",
    "Andi",
    "Sistem Informasi"
);
$mhs1->setSemester(5);
$mhs1->setNilai(85);
echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Prodi: " . $mhs1->getProdi() . "<br>";
echo "Semester: " . $mhs1->getSemester() . "<br>";
echo "Nilai: " . $mhs1->getNilai() . "<br>";
echo "Grade: " . $mhs1->tentukanGrade() . "<br>";

echo "<br>";

$mhs2 = new Mahasiswa(
    "2301002",
    "Budi",
    "Sistem Informasi"
);
$mhs2->setSemester(5);
$mhs2->setNilai(75);
echo "NIM: " . $mhs2->getNim() . "<br>";
echo "Nama: " . $mhs2->getNama() . "<br>";
echo "Prodi: " . $mhs2->getProdi() . "<br>";
echo "Semester: " . $mhs2->getSemester() . "<br>";
echo "Nilai: " . $mhs2->getNilai() . "<br>";
echo "Grade: " . $mhs2->tentukanGrade() . "<br>";

echo "<br>";

$mhs3 = new Mahasiswa(
    "2301003",
    "Agus",
    "Sistem Informasi"
);
$mhs3->setSemester(5);
// $mhs3->setNilai(65);
echo "NIM: " . $mhs3->getNim() . "<br>";
echo "Nama: " . $mhs3->getNama() . "<br>";
echo "Prodi: " . $mhs3->getProdi() . "<br>";
echo "Semester: " . $mhs3->getSemester() . "<br>";
echo "Nilai: " . $mhs3->getNilai() . "<br>";
echo "Grade: " . $mhs3->tentukanGrade() . "<br>";
?>