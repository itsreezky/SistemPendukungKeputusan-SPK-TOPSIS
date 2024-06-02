<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiResponsif extends Model
{
    protected $table            = 'normalisasi_responsif';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['vendor', 'VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E', 'priority_vector', 'bobot', 'eigen_value', 'lambda_max', 'ci', 'ri', 'cr', 'consistency'];

    public function normalisasiResponsif()
    {
        // Update nilai pada tabel normalisasi_responsif
        $this->truncate();

        $data = [
            ['VENDOR A', 0.37, 0.26, 0.37, 0.43, 0.39, 1.83, 0.37, 0.98],
            ['VENDOR B', 0.07, 0.05, 0.05, 0.02, 0.04, 0.24, 0.05, 0.93],
            ['VENDOR C', 0.37, 0.37, 0.37, 0.31, 0.39, 1.81, 0.36, 0.97],
            ['VENDOR D', 0.05, 0.16, 0.07, 0.06, 0.04, 0.39, 0.08, 1.28],
            ['VENDOR E', 0.12, 0.16, 0.12, 0.18, 0.13, 0.72, 0.14, 1.11]
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
                'lambda_max' => 5.26, // Tetapkan 𝜆 maks
                'ci' => 0.07, // Tetapkan CI
                'ri' => 1.12, // Tetapkan RI
                'cr' => 0.06, // Tetapkan CR
                'consistency' => 'KONSISTEN' // Tetapkan Konsistensi
            ]);
        }

        return true;
    }
}
