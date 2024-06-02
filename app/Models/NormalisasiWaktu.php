<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiWaktu extends Model
{
    protected $table            = 'normalisasi_waktu';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['vendor', 'VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E', 'priority_vector', 'bobot', 'eigen_value', 'lambda_max', 'ci', 'ri', 'cr', 'consistency'];

    public function normalisasiWaktu()
    {
        // Update nilai pada tabel normalisasi_waktu
        $this->truncate();

        $data = [
            ['VENDOR A', 0.36, 0.36, 0.37, 0.25, 0.39, 1.73, 0.35, 0.96],
            ['VENDOR B', 0.04, 0.04, 0.05, 0.02, 0.04, 0.19, 0.04, 0.97],
            ['VENDOR C', 0.36, 0.28, 0.37, 0.41, 0.39, 1.81, 0.36, 0.97],
            ['VENDOR D', 0.12, 0.20, 0.07, 0.08, 0.04, 0.52, 0.10, 1.27],
            ['VENDOR E', 0.12, 0.12, 0.12, 0.25, 0.13, 0.74, 0.15, 1.14]
        ];

        foreach ($data as $row) {
            $this->insert([
                'vendor' => $row[0],
                'VENDOR_A' => $row[1],
                'VENDOR_B' => $row[2],
                'VENDOR_C' => $row[3],
                'VENDOR_D' => $row[4],
                'VENDOR_E' => $row[5],
                'priority_vector' => $row[6],
                'bobot' => $row[7],
                'eigen_value' => $row[8],
                'lambda_max' => 5.30, // Tetapkan 𝜆 maks
                'ci' => 0.08, // Tetapkan CI
                'ri' => 1.12, // Tetapkan RI
                'cr' => 0.07, // Tetapkan CR
                'consistency' => 'KONSISTEN' // Tetapkan Konsistensi
            ]);
        }

        return true;
    }
}
