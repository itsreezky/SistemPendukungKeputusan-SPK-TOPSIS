<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Dashboard
$routes->get('/', 'DashboardController::index');

// Master Data Kriteria
$routes->get('/function/kriteria', 'KriteriaController::index');
$routes->post('/function/kriteria/save', 'KriteriaController::save');
$routes->post('/function/kriteria/update', 'KriteriaController::update');
$routes->post('/function/kriteria/delete', 'KriteriaController::delete');
$routes->get('/function/kriteria/(:num)', 'KriteriaController::edit/$1');

// Master Data Alternatif
$routes->get('/function/alternatif', 'AlternatifController::index');
$routes->post('/function/alternatif/save', 'AlternatifController::save');
$routes->post('/function/alternatif/update', 'AlternatifController::update');
$routes->post('/function/alternatif/delete', 'AlternatifController::delete');
$routes->get('/function/alternatif/(:num)', 'AlternatifController::edit/$1');

// Master Data Matriks Perbandingan
$routes->get('function/matriks', 'MatriksPerbandinganController::index');


$routes->post('function/matriks/saveKriteria', 'MatriksPerbandinganController::saveKriteria');
$routes->post('function/matriks/saveKualitas', 'MatriksPerbandinganController::saveKualitas');
$routes->post('function/matriks/saveHarga', 'MatriksPerbandinganController::saveHarga');
$routes->post('function/matriks/saveKredibilitas', 'MatriksPerbandinganController::saveKredibilitas');
$routes->post('function/matriks/saveWaktu', 'MatriksPerbandinganController::saveWaktu');
$routes->post('function/matriks/saveResponsif', 'MatriksPerbandinganController::saveResponsif');

$routes->post('function/matriks/updateKriteria', 'MatriksPerbandinganController::updateKriteria');
$routes->post('function/matriks/updateKualitas', 'MatriksPerbandinganController::updateKualitas');
$routes->post('function/matriks/updateHarga', 'MatriksPerbandinganController::updateHarga');
$routes->post('function/matriks/updateKredibilitas', 'MatriksPerbandinganController::updateKredibilitas');
$routes->post('function/matriks/updateWaktu', 'MatriksPerbandinganController::updateWaktu');
$routes->post('function/matriks/updateResponsif', 'MatriksPerbandinganController::updateResponsif');

$routes->delete('function/matriks/deleteKriteria/(:num)', 'MatriksPerbandinganController::deleteKriteria/$1');
$routes->delete('function/matriks/deleteKualitas/(:num)', 'MatriksPerbandinganController::deleteKualitas/$1');
$routes->delete('function/matriks/deleteHarga/(:num)', 'MatriksPerbandinganController::deleteHarga/$1');
$routes->delete('function/matriks/deleteKredibilitas/(:num)', 'MatriksPerbandinganController::deleteKredibilitas/$1');
$routes->delete('function/matriks/deleteWaktu/(:num)', 'MatriksPerbandinganController::deleteWaktu/$1');
$routes->delete('function/matriks/deleteResponsif/(:num)', 'MatriksPerbandinganController::deleteResponsif/$1');

$routes->get('function/matriks/editKriteria/(:num)', 'MatriksPerbandinganController::editKriteria/$1');
$routes->get('function/matriks/editKualitas/(:num)', 'MatriksPerbandinganController::editKualitas/$1');
$routes->get('function/matriks/editHarga/(:num)', 'MatriksPerbandinganController::editHarga/$1');
$routes->get('function/matriks/editKredibilitas/(:num)', 'MatriksPerbandinganController::editKredibilitas/$1');
$routes->get('function/matriks/editWaktu/(:num)', 'MatriksPerbandinganController::editWaktu/$1');
$routes->get('function/matriks/editResponsif/(:num)', 'MatriksPerbandinganController::editResponsif/$1');

$routes->get('function/normalisasi', 'NormalisasiController::index');
$routes->post('function/normalisasi/kriteria', 'NormalisasiController::normalisasiKriteria');
$routes->post('function/normalisasi/kualitas', 'NormalisasiController::normalisasiKualitas');
$routes->post('function/normalisasi/harga', 'NormalisasiController::normalisasiHarga');
$routes->post('function/normalisasi/kredibilitas', 'NormalisasiController::normalisasiKredibilitas');
$routes->post('function/normalisasi/responsif', 'NormalisasiController::normalisasiResponsif');
$routes->post('function/normalisasi/waktu', 'NormalisasiController::normalisasiWaktu');

// Skala Penilaian Kriteria
$routes->get('function/skala_nilaiKriteria', 'SkalaPerbandinganController::indexKriteria');
$routes->post('function/skala_nilaiKriteria/hitungGeomeanKriteria', 'SkalaPerbandinganController::hitungGeomeanKriteria');
$routes->post('function/skala_nilaiKriteria/simpanDataKriteria', 'SkalaPerbandinganController::simpanDataKriteria');
$routes->post('function/skala_nilaiKriteria/hapusDataKriteria', 'SkalaPerbandinganController::hapusDataKriteria');
$routes->get('function/skala_nilaiKriteria/getSavedData', 'SkalaPerbandinganController::getSavedData');


// Skala Penilaian Harga
$routes->get('function/skala_nilaiHarga', 'SkalaPerbandinganController::indexHarga');
$routes->post('function/skala_nilaiHarga/hitungGeomeanHarga', 'SkalaPerbandinganController::hitungGeomeanHarga');
$routes->post('function/skala_nilaiHarga/simpanDataHarga', 'SkalaPerbandinganController::simpanDataHarga');
$routes->post('function/skala_nilaiHarga/hapusDataHarga', 'SkalaPerbandinganController::hapusDataHarga');
$routes->get('function/skala_nilaiHarga/getSavedData', 'SkalaPerbandinganController::getSavedDataHarga');


// Skala Penilaian Kualitas
$routes->get('function/skala_nilaiKualitas', 'SkalaPerbandinganController::indexKualitas');
$routes->post('function/skala_nilaiKualitas/hitungGeomeanKualitas', 'SkalaPerbandinganController::hitungGeomeanKualitas');
$routes->post('function/skala_nilaiKualitas/simpanDataKualitas', 'SkalaPerbandinganController::simpanDataKualitas');
$routes->post('function/skala_nilaiKualitas/hapusDataKualitas', 'SkalaPerbandinganController::hapusDataKualitas');
$routes->get('function/skala_nilaiKualitas/getSavedData', 'SkalaPerbandinganController::getSavedDataKualitas');

// Skala Penilaian Waktu
$routes->get('function/skala_nilaiWaktu', 'SkalaPerbandinganController::indexWaktu');
$routes->post('function/skala_nilaiWaktu/hitungGeomeanWaktu', 'SkalaPerbandinganController::hitungGeomeanWaktu');
$routes->post('function/skala_nilaiWaktu/simpanDataWaktu', 'SkalaPerbandinganController::simpanDataWaktu');
$routes->post('function/skala_nilaiWaktu/hapusDataWaktu', 'SkalaPerbandinganController::hapusDataWaktu');
$routes->get('function/skala_nilaiWaktu/getSavedData', 'SkalaPerbandinganController::getSavedDataWaktu');

// Skala Penilaian Kredibilitas
$routes->get('function/skala_nilaiKredibilitas', 'SkalaPerbandinganController::indexKredibilitas');
$routes->post('function/skala_nilaiKredibilitas/hitungGeomeanKredibilitas', 'SkalaPerbandinganController::hitungGeomeanKredibilitas');
$routes->post('function/skala_nilaiKredibilitas/simpanDataKredibilitas', 'SkalaPerbandinganController::simpanDataKredibilitas');
$routes->post('function/skala_nilaiKredibilitas/hapusDataKredibilitas', 'SkalaPerbandinganController::hapusDataKredibilitas');
$routes->get('function/skala_nilaiKredibilitas/getSavedData', 'SkalaPerbandinganController::getSavedDataKredibilitas');

// Skala Penilaian Responsif
$routes->get('function/skala_nilaiResponsif', 'SkalaPerbandinganController::indexResponsif');
$routes->post('function/skala_nilaiResponsif/hitungGeomeanResponsif', 'SkalaPerbandinganController::hitungGeomeanResponsif');
$routes->post('function/skala_nilaiResponsif/simpanDataResponsif', 'SkalaPerbandinganController::simpanDataResponsif');
$routes->post('function/skala_nilaiResponsif/hapusDataResponsif', 'SkalaPerbandinganController::hapusDataResponsif');
$routes->get('function/skala_nilaiResponsif/getSavedData', 'SkalaPerbandinganController::getSavedDataResponsif');

// Skor Akhir
$routes->get('function/hasil_akhir', 'SkorAlternatifController::index');
$routes->post('function/hasil_akhir/hitungSkor', 'SkorAlternatifController::hitungSkor');