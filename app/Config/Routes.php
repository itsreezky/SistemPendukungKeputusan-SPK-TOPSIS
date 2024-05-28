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

// Master Data Matriks
$routes->get('/function/matriks', 'MatriksPerbandinganController::index');
