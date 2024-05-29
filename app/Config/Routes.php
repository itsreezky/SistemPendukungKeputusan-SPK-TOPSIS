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

// Master Data Kriteria
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

$routes->get('function/skalanilai', 'SkalanilaiController::index');