<?php

require_once __DIR__ . '/../Model/MahasiswaModel.php';

class MahasiswaController {
    public function index() {
        $model = new MahasiswaModel();

        $data = [
            "mahasiswa" => $model->getAll()
        ];

        require __DIR__ . '/../Views/Mahasiswa/index.php';
    }
}

?>