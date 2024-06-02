<?php

namespace App\Controllers;

use App\Models\NormalisasiKriteria as NormalisasiKriteriaModel;
use App\Models\NormalisasiKualitas as NormalisasiKualitasModel;
use App\Models\NormalisasiHarga as NormalisasiHargaModel;
use App\Models\NormalisasiKredibilitas as NormalisasiKredibilitasModel;
use App\Models\NormalisasiResponsif as NormalisasiResponsifModel;
use App\Models\NormalisasiWaktu as NormalisasiWaktuModel;

class SkorAlternatifController extends BaseController
{
    public function hitungSkorAlternatif()
    {
        // Mendapatkan nilai normalisasi kriteria
        $normalisasiKriteriaModel = new NormalisasiKriteriaModel();
        $normalisasiKriteria = $normalisasiKriteriaModel->findAll(); // Ambil semua data normalisasi kriteria

        // Mendapatkan nilai normalisasi kualitas
        $normalisasiKualitasModel = new NormalisasiKualitasModel();
        $normalisasiKualitas = $normalisasiKualitasModel->findAll(); // Ambil semua data normalisasi kualitas

        // Mendapatkan nilai normalisasi harga
        $normalisasiHargaModel = new NormalisasiHargaModel();
        $normalisasiHarga = $normalisasiHargaModel->findAll(); // Ambil semua data normalisasi harga

        // Mendapatkan nilai normalisasi kredibilitas
        $normalisasiKredibilitasModel = new NormalisasiKredibilitasModel();
        $normalisasiKredibilitas = $normalisasiKredibilitasModel->findAll(); // Ambil semua data normalisasi kredibilitas

        // Mendapatkan nilai normalisasi responsif
        $normalisasiResponsifModel = new NormalisasiResponsifModel();
        $normalisasiResponsif = $normalisasiResponsifModel->findAll(); // Ambil semua data normalisasi responsif

        // Mendapatkan nilai normalisasi waktu
        $normalisasiWaktuModel = new NormalisasiWaktuModel();
        $normalisasiWaktu = $normalisasiWaktuModel->findAll(); // Ambil semua data normalisasi waktu

        // Hitung skor alternatif untuk setiap vendor
        $skorAlternatif = [];
        foreach ($normalisasiKriteria as $key => $row) {
            $bobot = $row['bobot']; // Ambil bobot dari baris normalisasi saat ini

            $skor = 1;
            $skor *= pow($normalisasiKriteria[$key]['VENDOR_A'], $bobot);
            $skor *= pow($normalisasiKriteria[$key]['VENDOR_B'], $bobot);
            $skor *= pow($normalisasiKriteria[$key]['VENDOR_C'], $bobot);
            $skor *= pow($normalisasiKriteria[$key]['VENDOR_D'], $bobot);
            $skor *= pow($normalisasiKriteria[$key]['VENDOR_E'], $bobot);
            
            $skorAlternatif[$row['kriteria']][$row['vendor']] = $skor;
        }

        // Kembalikan hasil skor alternatif
        return $skorAlternatif;
    }
}
