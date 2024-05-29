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
    protected $allowedFields    = ['vendor', 'alternatif1', 'alternatif2', 'alternatif3','alternatif4','alternatif5','priority_vector','bobot','eigen_value'];

    public function normalisasiWaktu()
    {
        $db = \Config\Database::connect();

        // Fetch all criteria from the comparison matrix
        $query = $db->table('matriks_perbandingan_waktu')->get();
        $matriks_waktu = $query->getResultArray();

        if (empty($matriks_waktu)) {
            return false; // Return false if no data found
        }

        // Calculate normalization
        $total_columns = [
            'alternatif1' => 0,
            'alternatif2' => 0,
            'alternatif3' => 0,
            'alternatif4' => 0,
            'alternatif5' => 0,
        ];

        foreach ($matriks_waktu as $waktu) {
            $total_columns['alternatif1'] += $waktu['alternatif1'];
            $total_columns['alternatif2'] += $waktu['alternatif2'];
            $total_columns['alternatif3'] += $waktu['alternatif3'];
            $total_columns['alternatif4'] += $waktu['alternatif4'];
            $total_columns['alternatif5'] += $waktu['alternatif5'];
        }
        

        // Delete existing normalized data
        $this->truncate();

        foreach ($matriks_waktu as $waktu) {
            $alternatif1_norm = $waktu['alternatif1'] / $total_columns['alternatif1'];
            $alternatif2_norm = $waktu['alternatif2'] / $total_columns['alternatif2'];
            $alternatif3_norm = $waktu['alternatif3'] / $total_columns['alternatif3'];
            $alternatif4_norm = $waktu['alternatif4'] / $total_columns['alternatif4'];
            $alternatif5_norm = $waktu['alternatif5'] / $total_columns['alternatif5'];

            // Calculate priority vector
            $priority_vector = ($alternatif1_norm + $alternatif2_norm + $alternatif3_norm + $alternatif4_norm + $alternatif5_norm) / 5;

            // Calculate bobot and eigen_value as per your requirements
            $bobot = $priority_vector; // Update this as per your calculation logic
            $eigen_value = $priority_vector; // Update this as per your calculation logic

            // Save normalized data
            $data = [
                'vendor' => $waktu['vendor'],
                'alternatif1' => $alternatif1_norm,
                'alternatif2' => $alternatif2_norm,
                'alternatif3' => $alternatif3_norm,
                'alternatif4' => $alternatif4_norm,
                'alternatif5' => $alternatif5_norm,
                'priority_vector' => $priority_vector,
                'bobot' => $bobot,
                'eigen_value' => $eigen_value,
            ];
            $this->insert($data);
        }

        return true; // Indicate successful normalization
    }
}
