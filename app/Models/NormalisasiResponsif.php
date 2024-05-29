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
    protected $allowedFields    = ['vendor', 'alternatif1', 'alternatif2', 'alternatif3','alternatif4','alternatif5','priority_vector','bobot','eigen_value'];

    public function normalisasiResponsif()
    {
        $db = \Config\Database::connect();

        // Fetch all criteria from the comparison matrix
        $query = $db->table('matriks_perbandingan_responsif')->get();
        $matriks_responsif = $query->getResultArray();

        if (empty($matriks_responsif)) {
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

        foreach ($matriks_responsif as $responsif) {
            $total_columns['alternatif1'] += $responsif['alternatif1'];
            $total_columns['alternatif2'] += $responsif['alternatif2'];
            $total_columns['alternatif3'] += $responsif['alternatif3'];
            $total_columns['alternatif4'] += $responsif['alternatif4'];
            $total_columns['alternatif5'] += $responsif['alternatif5'];
        }
        

        // Delete existing normalized data
        $this->truncate();

        foreach ($matriks_responsif as $responsif) {
            $alternatif1_norm = $responsif['alternatif1'] / $total_columns['alternatif1'];
            $alternatif2_norm = $responsif['alternatif2'] / $total_columns['alternatif2'];
            $alternatif3_norm = $responsif['alternatif3'] / $total_columns['alternatif3'];
            $alternatif4_norm = $responsif['alternatif4'] / $total_columns['alternatif4'];
            $alternatif5_norm = $responsif['alternatif5'] / $total_columns['alternatif5'];

            // Calculate priority vector
            $priority_vector = ($alternatif1_norm + $alternatif2_norm + $alternatif3_norm + $alternatif4_norm + $alternatif5_norm) / 5;

            // Calculate bobot and eigen_value as per your requirements
            $bobot = $priority_vector; // Update this as per your calculation logic
            $eigen_value = $priority_vector; // Update this as per your calculation logic

            // Save normalized data
            $data = [
                'vendor' => $responsif['vendor'],
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
