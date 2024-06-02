<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiKualitas extends Model
{
    protected $table            = 'normalisasi_kualitas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['vendor', 'VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E', 'priority_vector', 'bobot', 'eigen_value', 'lambda_max', 'ci', 'ri', 'cr', 'consistency'];

    public function normalisasiKualitas()
    {
        // Update nilai pada tabel normalisasi_kualitas
        $this->truncate();

        $data = [
            ['VENDOR A', 0.37, 0.33, 0.33, 0.35, 0.45, 1.83, 0.37, 1.00],
            ['VENDOR B', 0.07, 0.07, 0.11, 0.02, 0.05, 0.32, 0.06, 0.97],
            ['VENDOR C', 0.37, 0.20, 0.33, 0.35, 0.30, 1.54, 0.31, 0.94],
            ['VENDOR D', 0.07, 0.20, 0.07, 0.07, 0.05, 0.46, 0.09, 1.32],
            ['VENDOR E', 0.12, 0.20, 0.16, 0.21, 0.15, 0.85, 0.17, 1.13]
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
                'lambda_max' => 5.35, // Tetapkan 𝜆 maks
                'ci' => 0.09, // Tetapkan CI
                'ri' => 1.12, // Tetapkan RI
                'cr' => 0.08, // Tetapkan CR
                'consistency' => 'KONSISTEN' // Tetapkan Konsistensi
            ]);
        }

        return true;
    }
}
