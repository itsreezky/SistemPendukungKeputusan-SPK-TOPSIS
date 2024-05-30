<?php

namespace App\Controllers;

use App\Models\NormalisasiKriteria;
use App\Models\NormalisasiKualitas;
use App\Models\NormalisasiHarga;
use App\Models\NormalisasiKredibilitas;
use App\Models\NormalisasiResponsif;
use App\Models\NormalisasiWaktu;


class NormalisasiController extends BaseController
{
    // Normalisasi Kriteria
    public function normalisasiKriteria()
    {
        $model = new NormalisasiKriteria();

        if ($model->normalisasiKriteria()) {
            return $this->response->setJSON(['message' => 'Data Kriteria berhasil dinormalisasi']);
        } else {
            return $this->response->setJSON(['message' => 'Tidak ada data untuk dinormalisasi'], 400);
        }
    }
    // Normalisasi Kualitas
    public function normalisasiKualitas()
    {
        $model = new NormalisasiKualitas();

        if ($model->normalisasiKualitas()) {
            return $this->response->setJSON(['message' => 'Data Kualitas berhasil dinormalisasi']);
        } else {
            return $this->response->setJSON(['message' => 'Tidak ada data untuk dinormalisasi'], 400);
        }
    }
    // Normalisasi Harga
    public function normalisasiHarga()
    {
        $model = new NormalisasiHarga();

        if ($model->normalisasiHarga()) {
            return $this->response->setJSON(['message' => 'Data Harga berhasil dinormalisasi']);
        } else {
            return $this->response->setJSON(['message' => 'Tidak ada data untuk dinormalisasi'], 400);
        }
    }
    // Normalisasi Kredibilitas
    public function normalisasiKredibilitas()
    {
        $model = new NormalisasiKredibilitas();

        if ($model->normalisasiKredibilitias()) {
            return $this->response->setJSON(['message' => 'Data Kredibilitas berhasil dinormalisasi']);
        } else {
            return $this->response->setJSON(['message' => 'Tidak ada data untuk dinormalisasi'], 400);
        }
    }
    // Normalisasi Responsif
    public function normalisasiResponsif()
    {
        $model = new NormalisasiResponsif();

        if ($model->normalisasiResponsif()) {
            return $this->response->setJSON(['message' => 'Data Responsif berhasil dinormalisasi']);
        } else {
            return $this->response->setJSON(['message' => 'Tidak ada data untuk dinormalisasi'], 400);
        }
        
    }
    // Normalisasi Waktu
    public function normalisasiWaktu()
    {
        $model = new NormalisasiWaktu();

        if ($model->normalisasiWaktu()) {
            return $this->response->setJSON(['message' => 'Data Waktu berhasil dinormalisasi']);
        } else {
            return $this->response->setJSON(['message' => 'Tidak ada data untuk dinormalisasi'], 400);
        }
    }

    // Normalisasi DATA
    public function index()
    {
        $model = new NormalisasiKriteria();
        $model2 = new NormalisasiKualitas();
        $model3 = new NormalisasiHarga();
        $model4 = new NormalisasiKredibilitas();
        $model5 = new NormalisasiResponsif();
        $model6 = new NormalisasiWaktu();
        $data['kriteria'] = $model->findAll();
        $data['kualitas'] = $model2->findAll();
        $data['harga'] = $model3->findAll();
        $data['kredibilitas'] = $model4->findAll();
        $data['responsif'] = $model5->findAll();
        $data['waktu'] = $model6->findAll();

        return view('function/normalisasi', $data);
    }
}
