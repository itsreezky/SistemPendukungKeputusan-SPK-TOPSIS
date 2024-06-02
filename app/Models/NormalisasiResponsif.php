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
    protected $allowedFields    = ['vendor', 'VENDOR_A', 'VENDOR_B', 'VENDOR_C','VENDOR_D','VENDOR_E','priority_vector','bobot','eigen_value'];

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
            'VENDOR_A' => 0,
            'VENDOR_B' => 0,
            'VENDOR_C' => 0,
            'VENDOR_D' => 0,
            'VENDOR_E' => 0,
        ];

        foreach ($matriks_responsif as $responsif) {
            $total_columns['VENDOR_A'] += $responsif['VENDOR_A'];
            $total_columns['VENDOR_B'] += $responsif['VENDOR_B'];
            $total_columns['VENDOR_C'] += $responsif['VENDOR_C'];
            $total_columns['VENDOR_D'] += $responsif['VENDOR_D'];
            $total_columns['VENDOR_E'] += $responsif['VENDOR_E'];
        }
        

        // Delete existing normalized data
        $this->truncate();

        foreach ($matriks_responsif as $responsif) {
            $VENDOR_A_norm = $responsif['VENDOR_A'] / $total_columns['VENDOR_A'];
            $VENDOR_B_norm = $responsif['VENDOR_B'] / $total_columns['VENDOR_B'];
            $VENDOR_C_norm = $responsif['VENDOR_C'] / $total_columns['VENDOR_C'];
            $VENDOR_D_norm = $responsif['VENDOR_D'] / $total_columns['VENDOR_D'];
            $VENDOR_E_norm = $responsif['VENDOR_E'] / $total_columns['VENDOR_E'];

            // Calculate priority vector
            $priority_vector = ($VENDOR_A_norm + $VENDOR_B_norm + $VENDOR_C_norm + $VENDOR_D_norm + $VENDOR_E_norm) / 5;

            // Calculate bobot and eigen_value as per your requirements
            $bobot = $priority_vector; // Update this as per your calculation logic
            $eigen_value = $priority_vector; // Update this as per your calculation logic

            // Save normalized data
            $data = [
                'vendor' => $responsif['vendor'],
                'VENDOR_A' => $VENDOR_A_norm,
                'VENDOR_B' => $VENDOR_B_norm,
                'VENDOR_C' => $VENDOR_C_norm,
                'VENDOR_D' => $VENDOR_D_norm,
                'VENDOR_E' => $VENDOR_E_norm,
                'priority_vector' => $priority_vector,
                'bobot' => $bobot,
                'eigen_value' => $eigen_value,
            ];
            $this->insert($data);
        }

        return true; // Indicate successful normalization
    }
}
