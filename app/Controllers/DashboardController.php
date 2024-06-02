<?php

namespace App\Controllers;

use App\Models\Kriteria;
use App\Models\Alternatif;
use App\Models\TopsisRanking;
use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Instantiate models
        $kriteriaModel = new Kriteria();
        $alternatifModel = new Alternatif();
        $topsisModel = new TopsisRanking();
        
        // Fetch data
        $data['jumlah_kriteria'] = $kriteriaModel->getKriteriaCount();
        $data['jumlah_alternatif'] = $alternatifModel->getAlternatifCount();
        $data['topsis_results'] = $topsisModel->findAll();
        
        // Load view with data
        return view('dashboard', $data);
    }
}
