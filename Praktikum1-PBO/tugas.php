<?php
class Kendaraan
{
    public $nomor;
    public $merk;
    public $jenis;

    public function tampilkanData()
    {
        echo "Nomor Kendaraan : " . $this->nomor . "<br>";
        echo "Merk : " . $this->merk . "<br>";
        echo "Jenis : " . $this->jenis . "<br>";
    }

    public function statusKendaraan()
    {
        return "Kendaraan tersedia untuk disewa.";
    }
}

class Pelanggan
{
    public $id;
    public $nama;
    public $alamat;

    public function tampilkanData()
    {
        echo "ID Pelanggan : " . $this->id . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Alamat : " . $this->alamat . "<br>";
    }

    public function sewaKendaraan()
    {
        return "Pelanggan menyewa kendaraan.";
    }
}

$kendaraan1 = new Kendaraan();

$kendaraan1->nomor = "K001";
$kendaraan1->merk = "Toyota";
$kendaraan1->jenis = "Avanza";

$kendaraan2 = new Kendaraan();

$kendaraan2->nomor = "K002";
$kendaraan2->merk = "Honda";
$kendaraan2->jenis = "Brio";


$pelanggan1 = new Pelanggan();

$pelanggan1->id = "P001";
$pelanggan1->nama = "Andi";
$pelanggan1->alamat = "Nganjuk";

$pelanggan2 = new Pelanggan();

$pelanggan2->id = "P002";
$pelanggan2->nama = "Budi";
$pelanggan2->alamat = "Surabaya";


echo "<h2>Data Kendaraan 1</h2>";
$kendaraan1->tampilkanData();
echo "Status : " . $kendaraan1->statusKendaraan();


echo "<h2>Data Kendaraan 2</h2>";
$kendaraan2->tampilkanData();
echo "Status : " . $kendaraan2->statusKendaraan();


echo "<h2>Data Pelanggan 1</h2>";
$pelanggan1->tampilkanData();
echo "Aktivitas : " . $pelanggan1->sewaKendaraan();


echo "<h2>Data Pelanggan 2</h2>";
$pelanggan2->tampilkanData();
echo "Aktivitas : " . $pelanggan2->sewaKendaraan();
?>