<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiKredibilitas extends Model
{
    protected $table            = 'normalisasi_kredibilitas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['vendor', 'VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E', 'priority_vector', 'bobot', 'eigen_value', 'lambda_max', 'ci', 'ri', 'cr', 'consistency'];

    public function normalisasiKredibilitas()
    {
        // Update nilai pada tabel normalisasi_kredibilitas
        $this->truncate();

        $data = [
            ['VENDOR A', 0.37, 0.26, 0.37, 0.35, 0.39, 1.74, 0.35, 0.95],
            ['VENDOR B', 0.07, 0.05, 0.05, 0.02, 0.04, 0.25, 0.05, 0.93],
            ['VENDOR C', 0.37, 0.37, 0.37, 0.35, 0.39, 1.85, 0.37, 0.99],
            ['VENDOR D', 0.07, 0.16, 0.07, 0.07, 0.04, 0.42, 0.08, 1.20],
            ['VENDOR E', 0.12, 0.16, 0.12, 0.21, 0.13, 0.74, 0.15, 1.14]
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
                'lambda_max' => 5.22, // Tetapkan 𝜆 maks
                'ci' => 0.05, // Tetapkan CI
                'ri' => 1.12, // Tetapkan RI
                'cr' => 0.05, // Tetapkan CR
                'consistency' => 'KONSISTEN' // Tetapkan Konsistensi
            ]);
        }

        return true;
    }
}
