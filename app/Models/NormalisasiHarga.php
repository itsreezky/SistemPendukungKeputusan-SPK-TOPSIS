<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiHarga extends Model
{
    protected $table            = 'normalisasi_harga';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['vendor', 'VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E', 'priority_vector', 'bobot', 'eigen_value', 'lambda_max', 'ci', 'ri', 'cr', 'consistency'];

    public function normalisasiHarga()
    {
        // Update nilai pada tabel normalisasi_harga
        $this->truncate();

        $data = [
            ['VENDOR A', 0.08, 0.11, 0.06, 0.05, 0.04, 0.34, 0.07, 0.88],
            ['VENDOR B', 0.38, 0.54, 0.56, 0.71, 0.38, 2.59, 0.52, 0.95],
            ['VENDOR C', 0.08, 0.06, 0.06, 0.05, 0.06, 0.31, 0.06, 1.00],
            ['VENDOR D', 0.23, 0.11, 0.19, 0.14, 0.38, 1.05, 0.21, 1.47],
            ['VENDOR E', 0.23, 0.18, 0.13, 0.05, 0.13, 0.71, 0.14, 1.12]
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
                'lambda_max' => 5.42, // Tetapkan 𝜆 maks
                'ci' => 0.10, // Tetapkan CI
                'ri' => 1.12, // Tetapkan RI
                'cr' => 0.09, // Tetapkan CR
                'consistency' => 'KONSISTEN' // Tetapkan Konsistensi
            ]);
        }

        return true;
    }
}
