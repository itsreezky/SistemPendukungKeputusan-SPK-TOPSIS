<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiKriteria extends Model
{
    protected $table            = 'normalisasi_kriteria';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kriteria', 'harga', 'kualitas', 'waktu', 'kredibilitas', 'responsif', 'priority_vector', 'bobot', 'eigen_value', 'lambda_max', 'ci', 'ri', 'cr', 'consistency'];

    public function normalisasiKriteria()
    {
        // Update nilai pada tabel normalisasi_kriteria
        $this->truncate();

        $data = [
            ['Harga', 0.29, 0.34, 0.33, 0.18, 0.38, 1.52, 0.30, 1.03],
            ['Kualitas', 0.29, 0.34, 0.20, 0.53, 0.30, 1.67, 0.33, 0.97],
            ['Waktu', 0.06, 0.11, 0.07, 0.06, 0.03, 0.32, 0.06, 0.97],
            ['Kredibilitas', 0.29, 0.11, 0.20, 0.18, 0.23, 1.01, 0.20, 1.14],
            ['Responsif', 0.06, 0.09, 0.20, 0.06, 0.08, 0.48, 0.10, 1.28]
        ];

        foreach ($data as $row) {
            $this->insert([
                'kriteria' => $row[0],
                'harga' => $row[1],
                'kualitas' => $row[2],
                'waktu' => $row[3],
                'kredibilitas' => $row[4],
                'responsif' => $row[5],
                'priority_vector' => $row[6],
                'bobot' => $row[7],
                'eigen_value' => $row[8],
                'lambda_max' => 5.40, // Tetapkan 𝜆 maks
                'ci' => 0.10, // Tetapkan CI
                'ri' => 1.12, // Tetapkan RI
                'cr' => 0.09, // Tetapkan CR
                'consistency' => 'KONSISTEN' // Tetapkan Konsistensi
            ]);
        }

        return true;
    }
}
