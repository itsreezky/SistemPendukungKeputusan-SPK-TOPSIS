<?php

namespace App\Controllers;

use App\Models\Alternatif as AlternatifModel;

class AlternatifController extends BaseController
{
    protected $AlternatifModel;

    public function __construct()
    {
        $this->AlternatifModel = new AlternatifModel();
    }

    public function index()
    {
        
        $data['Alternatif'] = $this->AlternatifModel->findAll();
        return view('function/alternatif', $data);
    }

    public function save()
    {
        $this->AlternatifModel->save([
            'nama_alternatif' => $this->request->getVar('nama_alternatif'),
        ]);

        return $this->response->setJSON(['message' => 'Data Alternatif berhasil ditambahkan']);
    }

    public function update()
    {
        $this->AlternatifModel->save([
            'id' => $this->request->getVar('id'),
            'nama_alternatif' => $this->request->getVar('nama_alternatif'),
        ]);

        return $this->response->setJSON(['message' => 'Data Alternatif berhasil diubah']);
    }

    public function delete()
    {
        $id = $this->request->getVar('id');
        $this->AlternatifModel->delete($id);

        return $this->response->setJSON(['message' => 'Data Alternatif berhasil dihapus']);
    }

    public function edit($id)
    {
        $data = $this->AlternatifModel->find($id);
        return $this->response->setJSON($data);
    }
}
