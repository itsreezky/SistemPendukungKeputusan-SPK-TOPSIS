<?php

namespace App\Controllers;

use App\Models\HasilSkorAlternatif as HasilSkorAlternatifModel;

class SkorAlternatifController extends BaseController
{
    public function index()
    {
        $model = new HasilSkorAlternatifModel();
        $data['hasil_skor'] = $model->findAll();

        return view('function/skor_alternatif', $data);
    }

    public function hitungSkor()
    {
        $hasilSkorModel = new HasilSkorAlternatifModel();

        // Data vendor dan skor yang diberikan
        $hasilSkor = [
            [
                'vendor' => 'VENDOR A',
                'harga' => 0.06761,
                'kualitas' => 0.36554,
                'waktu' => 0.34617,
                'kredibilitas' => 0.34856,
                'responsif' => 0.36607
            ],
            [
                'vendor' => 'VENDOR B',
                'harga' => 0.51731,
                'kualitas' => 0.06460,
                'waktu' => 0.03865,
                'kredibilitas' => 0.04918,
                'responsif' => 0.04893
            ],
            [
                'vendor' => 'VENDOR C',
                'harga' => 0.06222,
                'kualitas' => 0.30887,
                'waktu' => 0.36296,
                'kredibilitas' => 0.36962,
                'responsif' => 0.36264
            ],
            [
                'vendor' => 'VENDOR D',
                'harga' => 0.21051,
                'kualitas' => 0.09177,
                'waktu' => 0.10404,
                'kredibilitas' => 0.08381,
                'responsif' => 0.07814
            ],
            [
                'vendor' => 'VENDOR E',
                'harga' => 0.14235,
                'kualitas' => 0.16922,
                'waktu' => 0.14818,
                'kredibilitas' => 0.14883,
                'responsif' => 0.14422
            ]
        ];

        // Kosongkan tabel sebelum menyimpan hasil baru
        $hasilSkorModel->truncate();

        // Simpan hasil perhitungan ke dalam tabel
        $hasilSkorModel->insertBatch($hasilSkor);

        return $this->response->setJSON(['status' => 'success', 'message' => 'Perhitungan skor alternatif berhasil']);
    }
}
