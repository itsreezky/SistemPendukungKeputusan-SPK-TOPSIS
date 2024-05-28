<?php

namespace App\Controllers;

use App\Models\Kriteria as KriteriaModel;

class KriteriaController extends BaseController
{
    protected $kriteriaModel;

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index()
    {
        
        $data['kriteria'] = $this->kriteriaModel->findAll();
        return view('function/kriteria', $data);
    }

    public function save()
    {
        $this->kriteriaModel->save([
            'Kode_Kriteria' => $this->request->getVar('Kode_Kriteria'),
            'Nama_Kriteria' => $this->request->getVar('Nama_Kriteria'),
            'Jenis' => $this->request->getVar('Jenis'),
        ]);

        return $this->response->setJSON(['message' => 'Data Kriteria berhasil ditambahkan']);
    }

    public function update()
    {
        $this->kriteriaModel->save([
            'id' => $this->request->getVar('id'),
            'Kode_Kriteria' => $this->request->getVar('Kode_Kriteria'),
            'Nama_Kriteria' => $this->request->getVar('Nama_Kriteria'),
            'Jenis' => $this->request->getVar('Jenis'),
        ]);

        return $this->response->setJSON(['message' => 'Data Kriteria berhasil diubah']);
    }

    public function delete()
    {
        $id = $this->request->getVar('id');
        $this->kriteriaModel->delete($id);

        return $this->response->setJSON(['message' => 'Data Kriteria berhasil dihapus']);
    }

    public function edit($id)
    {
        $data = $this->kriteriaModel->find($id);
        return $this->response->setJSON($data);
    }
}
