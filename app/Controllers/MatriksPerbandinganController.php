<?php

namespace App\Controllers;

use App\Models\MatriksPerbandinganKriteria as Kriteria;
use App\Models\MatriksPerbandinganKualitas as Kualitas;
use App\Models\MatriksPerbandinganHarga as Harga;
use App\Models\MatriksPerbandinganKredibilitas as Kredibilitas;
use App\Models\MatriksPerbandinganWaktu as Waktu;
use App\Models\MatriksPerbandinganResponsif as Responsif;

class MatriksPerbandinganController extends BaseController
{
    protected $kriteria, $kualitas, $harga, $kredibilitas, $waktu, $responsif;

    public function __construct()
    {
        $this->kriteria = new Kriteria();
        $this->kualitas = new Kualitas();
        $this->harga = new Harga();
        $this->kredibilitas = new Kredibilitas();
        $this->waktu = new Waktu();
        $this->responsif = new Responsif();
    }

    public function index()
    {
        $data = [
            'kriteria' => $this->kriteria->findAll(),
            'kualitas' => $this->kualitas->findAll(),
            'harga' => $this->harga->findAll(),
            'kredibilitas' => $this->kredibilitas->findAll(),
            'waktu' => $this->waktu->findAll(),
            'responsif' => $this->responsif->findAll(),
        ];
        
        return view('function/matriks', $data);
    }

    public function saveKriteria()
    {
        $this->kriteria->save([
            'harga' => $this->request->getVar('harga'),
            'kualitas' => $this->request->getVar('kualitas'),
            'waktu' => $this->request->getVar('waktu'),
            'kredibilitas' => $this->request->getVar('kredibilitas'),
            'responsif' => $this->request->getVar('responsif'),
        ]);

        return $this->response->setJSON(['message' => 'Data berhasil ditambahkan']);
    }

    public function saveKualitas()
    {
        $this->kualitas->save([
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil ditambahkan']);
    }

    public function saveHarga()
    {
        $this->harga->save([
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil ditambahkan']);
    }

    public function saveKredibilitas()
    {
        $this->kredibilitas->save([
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil ditambahkan']);
    }

    public function saveWaktu()
    {
        $this->waktu->save([
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil ditambahkan']);
    }

    public function saveResponsif()
    {
        $this->responsif->save([
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil ditambahkan']);
    }

    public function updateKriteria()
    {
        $this->kriteria->save([
            'id' => $this->request->getVar('id'),
            'harga' => $this->request->getVar('harga'),
            'kualitas' => $this->request->getVar('kualitas'),
            'waktu' => $this->request->getVar('waktu'),
            'kredibilitas' => $this->request->getVar('kredibilitas'),
            'responsif' => $this->request->getVar('responsif'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil diupdate']);
    }

    public function updateKualitas()
    {
        $this->kualitas->save([
            'id' => $this->request->getVar('id'),
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil diupdate']);
    }

    public function updateHarga()
    {
        $this->harga->save([
            'id' => $this->request->getVar('id'),
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil diupdate']);
    }

    public function updateKredibilitas()
    {
        $this->kredibilitas->save([
            'id' => $this->request->getVar('id'),
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil diupdate']);
    }

    public function updateWaktu()
    {
        $this->waktu->save([
            'id' => $this->request->getVar('id'),
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil diupdate']);
    }

    public function updateResponsif()
    {
        $this->responsif->save([
            'id' => $this->request->getVar('id'),
            'vendor' => $this->request->getVar('vendor'),
            'alternatif1' => $this->request->getVar('alternatif1'),
            'alternatif2' => $this->request->getVar('alternatif2'),
            'alternatif3' => $this->request->getVar('alternatif3'),
            'alternatif4' => $this->request->getVar('alternatif4'),
            'alternatif5' => $this->request->getVar('alternatif5'),
        ]);
        return $this->response->setJSON(['message' => 'Data berhasil diupdate']);
    }
    
    public function deleteKriteria($id)
    {
        $this->kriteria->delete($id);      
        return $this->response->setJSON(['message' => 'Data berhasil dihapus']);
    }

    public function deleteKualitas($id)
    {
        $this->kualitas->delete($id);
        return $this->response->setJSON(['message' => 'Data berhasil dihapus']);
    }

    public function deleteHarga($id)
    {
        $this->harga->delete($id);
        return $this->response->setJSON(['message' => 'Data berhasil dihapus']);
    }

    public function deleteKredibilitas($id)
    {
        $this->kredibilitas->delete($id);
        return $this->response->setJSON(['message' => 'Data berhasil dihapus']);
    }

    public function deleteWaktu($id)
    {
        $this->waktu->delete($id);
        return $this->response->setJSON(['message' => 'Data berhasil dihapus']);
    }

    public function deleteResponsif($id)
    {
        $this->responsif->delete($id);
        return $this->response->setJSON(['message' => 'Data berhasil dihapus']);
    }

    public function editKriteria($id)
    {
        $data['kriteria'] = $this->kriteria->find($id);
        return $this->response->setJSON($data);
    }

    public function editKualitas($id)
    {
        $data['kualitas'] = $this->kualitas->find($id);
        return $this->response->setJSON($data);
    }

    public function editHarga($id)
    {
        $data['harga'] = $this->harga->find($id);
        return $this->response->setJSON($data);
    }

    public function editKredibilitas($id)
    {
        $data['kredibilitas'] = $this->kredibilitas->find($id);
        return $this->response->setJSON($data);
    }

    public function editWaktu($id)
    {
        $data['waktu'] = $this->waktu->find($id);
        return $this->response->setJSON($data);
    }

    public function editResponsif($id)
    {
        $data['responsif'] = $this->responsif->find($id);
        return $this->response->setJSON($data);
    }
}
