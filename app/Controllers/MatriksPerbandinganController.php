<?php

namespace App\Controllers;

use App\Models\MatriksPerbandinganKriteria as Kriteria;
use App\Models\MatriksPerbandinganKualitas as Kualitas;
use App\Models\MatriksPerbandinganHarga as Harga;
use App\Models\MatriksPerbandinganKredibilitas as Kredibilitas;
use App\Models\MatriksPerbandinganWaktu as Waktu;

class MatriksPerbandinganController extends BaseController
{
    protected $kriteria, $kualitas, $harga, $kredibilitas, $waktu;

    public function __construct()
    {
        $this->kriteria = new Kriteria();
        $this->kualitas = new Kualitas();
        $this->harga = new Harga();
        $this->kredibilitas = new Kredibilitas();
        $this->waktu = new Waktu();
    }

    public function index()
    {
        $data = [
            'kriteria' => $this->kriteria->findAll(),
            'kualitas' => $this->kualitas->findAll(),
            'harga' => $this->harga->findAll(),
            'kredibilitas' => $this->kredibilitas->findAll(),
            'waktu' => $this->waktu->findAll(),
        ];
       
        return view('function/matriks', $data);
    }

}
