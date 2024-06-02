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
    protected $allowedFields    = ['vendor', 'VENDOR_A', 'VENDOR_B', 'VENDOR_C','VENDOR_D','VENDOR_E','priority_vector','bobot','eigen_value'];

    public function normalisasiHarga()
    {
        $db = \Config\Database::connect();

        // Fetch all criteria from the comparison matrix
        $query = $db->table('matriks_perbandingan_harga')->get();
        $matriks_harga = $query->getResultArray();

        if (empty($matriks_harga)) {
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

        foreach ($matriks_harga as $harga) {
            $total_columns['VENDOR_A'] += $harga['VENDOR_A'];
            $total_columns['VENDOR_B'] += $harga['VENDOR_B'];
            $total_columns['VENDOR_C'] += $harga['VENDOR_C'];
            $total_columns['VENDOR_D'] += $harga['VENDOR_D'];
            $total_columns['VENDOR_E'] += $harga['VENDOR_E'];
        }
        

        // Delete existing normalized data
        $this->truncate();

        foreach ($matriks_harga as $harga) {
            $VENDOR_A_norm = $harga['VENDOR_A'] / $total_columns['VENDOR_A'];
            $VENDOR_B_norm = $harga['VENDOR_B'] / $total_columns['VENDOR_B'];
            $VENDOR_C_norm = $harga['VENDOR_C'] / $total_columns['VENDOR_C'];
            $VENDOR_D_norm = $harga['VENDOR_D'] / $total_columns['VENDOR_D'];
            $VENDOR_E_norm = $harga['VENDOR_E'] / $total_columns['VENDOR_E'];

            // Calculate priority vector
            $priority_vector = ($VENDOR_A_norm + $VENDOR_B_norm + $VENDOR_C_norm + $VENDOR_D_norm + $VENDOR_E_norm) / 5;

            // Calculate bobot and eigen_value as per your requirements
            $bobot = $priority_vector; // Update this as per your calculation logic
            $eigen_value = $priority_vector; // Update this as per your calculation logic

            // Save normalized data
            $data = [
                'vendor' => $harga['vendor'],
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
