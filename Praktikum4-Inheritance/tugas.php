<?php

class Pengguna {
    protected $nama;
    protected $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran: Pengguna Umum<br>";
    }

}

?>