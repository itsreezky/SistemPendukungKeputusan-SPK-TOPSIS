<?php

namespace App\Models;

use CodeIgniter\Model;

class NormalisasiKriteria extends Model
{
    protected $table            = 'normalisasi_kriteria';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kriteria', 'harga', 'kualitas', 'waktu', 'kredibilitas', 'responsif', 'priority_vector', 'bobot', 'eigen_value'];

    public function normalisasiKriteria()
    {
        $db = \Config\Database::connect();

        // Fetch all criteria from the comparison matrix
        $query = $db->table('matriks_perbandingan_kriteria')->get();
        $matriks_kriteria = $query->getResultArray();

        if (empty($matriks_kriteria)) {
            return false; // Return false if no data found
        }

        // Calculate normalization
        $total_columns = [
            'harga' => 0,
            'kualitas' => 0,
            'waktu' => 0,
            'kredibilitas' => 0,
            'responsif' => 0,
        ];

        foreach ($matriks_kriteria as $kriteria) {
            $total_columns['harga'] += $kriteria['harga'];
            $total_columns['kualitas'] += $kriteria['kualitas'];
            $total_columns['waktu'] += $kriteria['waktu'];
            $total_columns['kredibilitas'] += $kriteria['kredibilitas'];
            $total_columns['responsif'] += $kriteria['responsif'];
        }
        

        // Delete existing normalized data
        $this->truncate();

        foreach ($matriks_kriteria as $kriteria) {
            $harga_norm = $kriteria['harga'] / $total_columns['harga'];
            $kualitas_norm = $kriteria['kualitas'] / $total_columns['kualitas'];
            $waktu_norm = $kriteria['waktu'] / $total_columns['waktu'];
            $kredibilitas_norm = $kriteria['kredibilitas'] / $total_columns['kredibilitas'];
            $responsif_norm = $kriteria['responsif'] / $total_columns['responsif'];

            // Calculate priority vector
            $priority_vector = ($harga_norm + $kualitas_norm + $waktu_norm + $kredibilitas_norm + $responsif_norm) / 5;

            // Calculate bobot and eigen_value as per your requirements
            $bobot = $priority_vector; // Update this as per your calculation logic
            $eigen_value = $priority_vector; // Update this as per your calculation logic

            // Save normalized data
            $this->insert([
                'kriteria' => $kriteria['id'],
                'harga' => $harga_norm,
                'kualitas' => $kualitas_norm,
                'waktu' => $waktu_norm,
                'kredibilitas' => $kredibilitas_norm,
                'responsif' => $responsif_norm,
                'priority_vector' => $priority_vector,
                'bobot' => $bobot,
                'eigen_value' => $eigen_value
            ]);
        }
        return true;
    }
}
