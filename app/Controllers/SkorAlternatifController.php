<?php

namespace App\Controllers;

use App\Models\HasilSkorAlternatif as HasilSkorAlternatifModel;
use App\Models\TopsisRanking as TopsisRankingModel;

class SkorAlternatifController extends BaseController
{
    public function index()
    {
        $model = new HasilSkorAlternatifModel();
        $data['hasil_skor'] = $model->findAll();

        // Data yang diperlukan untuk tampilan
        $data['bobot'] = [0.304, 0.333, 0.065, 0.202, 0.096];
        $data['jenis'] = ['Cost', 'Benefit', 'Benefit', 'Benefit', 'Benefit'];
        $data['pembagi'] = $this->hitungPembagi($data['hasil_skor']);
        $data['matriksTernormalisasi'] = $this->hitungMatriksTernormalisasi($data['hasil_skor'], $data['pembagi']);
        $data['matriksTernormalisasiTerbobot'] = $this->hitungMatriksTernormalisasiTerbobot($data['matriksTernormalisasi'], $data['bobot']);
        $data['solusiIdealPositif'] = $this->hitungSolusiIdealPositif($data['matriksTernormalisasiTerbobot'], $data['jenis']);
        $data['solusiIdealNegatif'] = $this->hitungSolusiIdealNegatif($data['matriksTernormalisasiTerbobot'], $data['jenis']);
        $data['jarakIdeal'] = $this->hitungJarakIdeal($data['matriksTernormalisasiTerbobot'], $data['solusiIdealPositif'], $data['solusiIdealNegatif']);
        $data['nilaiPreferensi'] = $this->hitungNilaiPreferensi($data['jarakIdeal']);

        // Save the TOPSIS results to the database
        $this->saveTopsisResults($data['nilaiPreferensi'], $data['jarakIdeal']);

        return view('function/hasil_akhir', $data);
    }

    private function saveTopsisResults($nilaiPreferensi, $jarakIdeal)
    {
        $topsisRankingModel = new TopsisRankingModel(); // Assuming you have a model for topsis_ranking table

        foreach ($nilaiPreferensi as $key => $nilai) {
            $topsisRankingModel->insert([
                'vendor' => $nilai['vendor'],
                'jarak_ideal_positif' => $jarakIdeal[$key]['jarakPositif'],
                'jarak_ideal_negatif' => $jarakIdeal[$key]['jarakNegatif'],
                'nilai_v' => $nilai['nilaiV'],
                'rank' => $key + 1
            ]);
        }
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

    // Fungsi-fungsi untuk perhitungan TOPSIS
    private function hitungPembagi($hasilSkor)
    {
        $pembagi = [
            'harga' => 0,
            'kualitas' => 0,
            'waktu' => 0,
            'kredibilitas' => 0,
            'responsif' => 0,
        ];

        foreach ($hasilSkor as $skor) {
            $pembagi['harga'] += pow($skor['harga'], 2);
            $pembagi['kualitas'] += pow($skor['kualitas'], 2);
            $pembagi['waktu'] += pow($skor['waktu'], 2);
            $pembagi['kredibilitas'] += pow($skor['kredibilitas'], 2);
            $pembagi['responsif'] += pow($skor['responsif'], 2);
        }

        foreach ($pembagi as &$value) {
            $value = sqrt($value);
        }

        return $pembagi;
    }

    private function hitungMatriksTernormalisasi($hasilSkor, $pembagi)
    {
        $ternormalisasi = [];

        foreach ($hasilSkor as $skor) {
            $ternormalisasi[] = [
                'vendor' => $skor['vendor'],
                'harga' => $skor['harga'] / $pembagi['harga'],
                'kualitas' => $skor['kualitas'] / $pembagi['kualitas'],
                'waktu' => $skor['waktu'] / $pembagi['waktu'],
                'kredibilitas' => $skor['kredibilitas'] / $pembagi['kredibilitas'],
                'responsif' => $skor['responsif'] / $pembagi['responsif'],
            ];
        }

        return $ternormalisasi;
    }

    private function hitungMatriksTernormalisasiTerbobot($ternormalisasi, $bobot)
    {
        $terbobot = [];

        foreach ($ternormalisasi as $nilai) {
            $terbobot[] = [
                'vendor' => $nilai['vendor'],
                'harga' => $nilai['harga'] * $bobot[0],
                'kualitas' => $nilai['kualitas'] * $bobot[1],
                'waktu' => $nilai['waktu'] * $bobot[2],
                'kredibilitas' => $nilai['kredibilitas'] * $bobot[3],
                'responsif' => $nilai['responsif'] * $bobot[4],
            ];
        }

        return $terbobot;
    }

    private function hitungSolusiIdealPositif($terbobot, $jenis)
    {
        // Check if the array is empty
        if (empty($terbobot)) {
            return null; // or handle the empty case accordingly
        }
    
        $solusiIdealPositif = [
            'harga' => $jenis[0] == 'Cost' ? min(array_column($terbobot, 'harga')) : max(array_column($terbobot, 'harga')),
            'kualitas' => $jenis[1] == 'Cost' ? min(array_column($terbobot, 'kualitas')) : max(array_column($terbobot, 'kualitas')),
            'waktu' => $jenis[2] == 'Cost' ? min(array_column($terbobot, 'waktu')) : max(array_column($terbobot, 'waktu')),
            'kredibilitas' => $jenis[3] == 'Cost' ? min(array_column($terbobot, 'kredibilitas')) : max(array_column($terbobot, 'kredibilitas')),
            'responsif' => $jenis[4] == 'Cost' ? min(array_column($terbobot, 'responsif')) : max(array_column($terbobot, 'responsif')),
        ];
    
        return $solusiIdealPositif;
    }

    private function hitungSolusiIdealNegatif($terbobot, $jenis)
    {
        // Check if the array is empty
        if (empty($terbobot)) {
            return null; // or handle the empty case accordingly
        }
    
        $solusiIdealNegatif = [
            'harga' => $jenis[0] == 'Cost' ? max(array_column($terbobot, 'harga')) : min(array_column($terbobot, 'harga')),
            'kualitas' => $jenis[1] == 'Cost' ? max(array_column($terbobot, 'kualitas')) : min(array_column($terbobot, 'kualitas')),
            'waktu' => $jenis[2] == 'Cost' ? max(array_column($terbobot, 'waktu')) : min(array_column($terbobot, 'waktu')),
            'kredibilitas' => $jenis[3] == 'Cost' ? max(array_column($terbobot, 'kredibilitas')) : min(array_column($terbobot, 'kredibilitas')),
            'responsif' => $jenis[4] == 'Cost' ? max(array_column($terbobot, 'responsif')) : min(array_column($terbobot, 'responsif')),
        ];
    
        return $solusiIdealNegatif;
    }
    

    private function hitungJarakIdeal($terbobot, $solusiIdealPositif, $solusiIdealNegatif)
    {
        $jarakIdeal = [];

        foreach ($terbobot as $nilai) {
            $jarakIdeal[] = [
                'vendor' => $nilai['vendor'],
                'jarakPositif' => sqrt(pow($nilai['harga'] - $solusiIdealPositif['harga'], 2) +
                                       pow($nilai['kualitas'] - $solusiIdealPositif['kualitas'], 2) +
                                       pow($nilai['waktu'] - $solusiIdealPositif['waktu'], 2) +
                                       pow($nilai['kredibilitas'] - $solusiIdealPositif['kredibilitas'], 2) +
                                       pow($nilai['responsif'] - $solusiIdealPositif['responsif'], 2)),
                'jarakNegatif' => sqrt(pow($nilai['harga'] - $solusiIdealNegatif['harga'], 2) +
                                       pow($nilai['kualitas'] - $solusiIdealNegatif['kualitas'], 2) +
                                       pow($nilai['waktu'] - $solusiIdealNegatif['waktu'], 2) +
                                       pow($nilai['kredibilitas'] - $solusiIdealNegatif['kredibilitas'], 2) +
                                       pow($nilai['responsif'] - $solusiIdealNegatif['responsif'], 2))
            ];
        }

        return $jarakIdeal;
    }

    private function hitungNilaiPreferensi($jarakIdeal)
    {
        $nilaiPreferensi = [];

        foreach ($jarakIdeal as $nilai) {
            $nilaiPreferensi[] = [
                'vendor' => $nilai['vendor'],
                'nilaiV' => $nilai['jarakNegatif'] / ($nilai['jarakPositif'] + $nilai['jarakNegatif'])
            ];
        }

        return $nilaiPreferensi;
    }
}

