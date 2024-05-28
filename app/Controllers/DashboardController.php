<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
     
        $kriteriaModel = new \App\Models\Kriteria();
        $alternatifModel = new \App\Models\Alternatif();
      
        $data['jumlah_kriteria'] = $kriteriaModel->getKriteriaCount();
        $data['jumlah_alternatif'] = $alternatifModel->getAlternatifCount();

    return view('dashboard', $data);
    }
}
