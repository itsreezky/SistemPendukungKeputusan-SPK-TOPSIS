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
    protected $allowedFields    = ['vendor', 'alternatif1', 'alternatif2', 'alternatif3','alternatif4','alternatif5','priority_vector','bobot','eigen_value'];

    public function normalisasiKredibilitias()
    {
        $db = \Config\Database::connect();

        // Fetch all criteria from the comparison matrix
        $query = $db->table('matriks_perbandingan_kredibilitas')->get();
        $matriks_kredibilitas = $query->getResultArray();

        if (empty($matriks_kredibilitas)) {
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

        foreach ($matriks_kredibilitas as $kredibilitas) {
            $total_columns['alternatif1'] += $kredibilitas['alternatif1'];
            $total_columns['alternatif2'] += $kredibilitas['alternatif2'];
            $total_columns['alternatif3'] += $kredibilitas['alternatif3'];
            $total_columns['alternatif4'] += $kredibilitas['alternatif4'];
            $total_columns['alternatif5'] += $kredibilitas['alternatif5'];
        }
        

        // Delete existing normalized data
        $this->truncate();

        foreach ($matriks_kredibilitas as $kredibilitas) {
            $alternatif1_norm = $kredibilitas['alternatif1'] / $total_columns['alternatif1'];
            $alternatif2_norm = $kredibilitas['alternatif2'] / $total_columns['alternatif2'];
            $alternatif3_norm = $kredibilitas['alternatif3'] / $total_columns['alternatif3'];
            $alternatif4_norm = $kredibilitas['alternatif4'] / $total_columns['alternatif4'];
            $alternatif5_norm = $kredibilitas['alternatif5'] / $total_columns['alternatif5'];

            // Calculate priority vector
            $priority_vector = ($alternatif1_norm + $alternatif2_norm + $alternatif3_norm + $alternatif4_norm + $alternatif5_norm) / 5;

            // Calculate bobot and eigen_value as per your requirements
            $bobot = $priority_vector; // Update this as per your calculation logic
            $eigen_value = $priority_vector; // Update this as per your calculation logic

            // Save normalized data
            $data = [
                'vendor' => $kredibilitas['vendor'],
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
