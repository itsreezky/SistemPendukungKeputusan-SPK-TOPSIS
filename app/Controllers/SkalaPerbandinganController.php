<?php

namespace App\Controllers;

use App\Models\Kriteria as KriteriaModel;
use App\Models\Alternatif as AlternatifModel;
use CodeIgniter\Controller;
 
class SkalaPerbandinganController extends Controller
{
    public function indexKriteria()
    {
        $kriteriaModel = new KriteriaModel();
        $alternatifModel = new AlternatifModel();
        $data['kriteria'] = $kriteriaModel->findAll();
        $data['alternatif'] = $alternatifModel->findAll();

        return view('function/skala_nilaiKriteria', $data);
    }

    public function indexHarga()
    {
        $kriteriaModel = new KriteriaModel();
        $alternatifModel = new AlternatifModel();
        $data['kriteria'] = $kriteriaModel->findAll();
        $data['alternatif'] = $alternatifModel->findAll();

        return view('function/skala_nilaiHarga', $data);
    }

    public function hitungGeomean()
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getPost('data');
            $geomeans = [];

            foreach ($data as $row) {
                $product = 1;
                $count = count($row);

                if ($count > 0) {
                    foreach ($row as $value) {
                        $product *= $value;
                    }
                    $geomean = pow($product, 1 / $count);
                } else {
                    $geomean = 0;
                }
                $geomeans[] = $geomean;
            }

            return $this->response->setJSON(['geomeans' => $geomeans]);
        }
    }

   
}
