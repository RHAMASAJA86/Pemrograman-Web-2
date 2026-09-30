<?php

class Produk {
    public $kode;
    public $nama;
    public $harga;
    public $stok;

    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode  = $kode;
        $this->nama  = $nama;
        $this->harga = $harga;
        $this->stok  = $stok;
    }

    public function tampilkanData() {
        echo "Kode : " . $this->kode . "<br>";
        echo "Nama : " . $this->nama . "<br>";
        echo "Harga : " . $this->harga . "<br>";
        echo "Stok : " . $this->stok . "<br>";
    }

    public function hitungNilaiStok() {
        return $this->harga * $this->stok;
    }

    public function diskon($persen) {
        if ($persen == 0) {
        } 
            $hargaDiskon = $this->harga - ($this->harga * $persen / 100);
            echo "Harga setelah diskon " . $persen . "% : " . $hargaDiskon . "<br>";
        
    }
}

$produk1 = new Produk("P001", "Laptop", 7000000, 10);
$produk2 = new Produk("P002", "Mouse", 150000, 25);

$produk1->tampilkanData();
echo "Nilai Stok : " . $produk1->hitungNilaiStok() . "<br>";
$produk1->diskon(10);
echo "<hr>";

$produk2->tampilkanData();
echo "Nilai Stok : " . $produk2->hitungNilaiStok() . "<br>";
$produk2->diskon(0);
echo "<hr>";

?>