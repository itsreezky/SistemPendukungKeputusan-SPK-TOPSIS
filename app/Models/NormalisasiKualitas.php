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
    protected $allowedFields    = ['vendor', 'alternatif1', 'alternatif2', 'alternatif3','alternatif4','alternatif5','priority_vector','bobot','eigen_value'];

    public function normalisasiKualitas()
    {
        $db = \Config\Database::connect();

        // Fetch all criteria from the comparison matrix
        $query = $db->table('matriks_perbandingan_kualitas')->get();
        $matriks_kualitas = $query->getResultArray();

        if (empty($matriks_kualitas)) {
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

        foreach ($matriks_kualitas as $kualitas) {
            $total_columns['alternatif1'] += $kualitas['alternatif1'];
            $total_columns['alternatif2'] += $kualitas['alternatif2'];
            $total_columns['alternatif3'] += $kualitas['alternatif3'];
            $total_columns['alternatif4'] += $kualitas['alternatif4'];
            $total_columns['alternatif5'] += $kualitas['alternatif5'];
        }
        

        // Delete existing normalized data
        $this->truncate();

        foreach ($matriks_kualitas as $kualitas) {
            $alternatif1_norm = $kualitas['alternatif1'] / $total_columns['alternatif1'];
            $alternatif2_norm = $kualitas['alternatif2'] / $total_columns['alternatif2'];
            $alternatif3_norm = $kualitas['alternatif3'] / $total_columns['alternatif3'];
            $alternatif4_norm = $kualitas['alternatif4'] / $total_columns['alternatif4'];
            $alternatif5_norm = $kualitas['alternatif5'] / $total_columns['alternatif5'];

            // Calculate priority vector
            $priority_vector = ($alternatif1_norm + $alternatif2_norm + $alternatif3_norm + $alternatif4_norm + $alternatif5_norm) / 5;

            // Calculate bobot and eigen_value as per your requirements
            $bobot = $priority_vector; // Update this as per your calculation logic
            $eigen_value = $priority_vector; // Update this as per your calculation logic

            // Save normalized data
            $data = [
                'vendor' => $kualitas['vendor'],
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
