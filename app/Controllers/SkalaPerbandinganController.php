<?php

namespace App\Controllers;

use App\Models\Kriteria as KriteriaModel;
use App\Models\Alternatif as AlternatifModel;
use CodeIgniter\Controller;
use Config\Database;

class SkalaPerbandinganController extends Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function index()
    {
        $kriteriaModel = new KriteriaModel();
        $alternatifModel = new AlternatifModel();
        $data['kriteria'] = $kriteriaModel->findAll();
        $data['alternatif'] = $alternatifModel->findAll();

        return view('function/skala_nilaiKriteria', $data);
    }

    public function hitungGeomeanKriteria()
    {
        // Get the request instance
        $request = \Config\Services::request();

        // Get the raw input stream (as a string)
        $rawData = $request->getBody();

        // Parse the raw JSON string into an associative array
        $data = json_decode($rawData, true);

        // Check if the data is properly parsed and is an array
        if (is_null($data) || !isset($data['data']) || !is_array($data['data'])) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'Invalid input data']);
        }

        // Extract the actual data array
        $criteriaData = $data['data'];

        // Now iterate over the array and calculate geomean
        $geomeans = [];
        foreach ($criteriaData as $row) {
            // Ensure the row is an array
            if (!is_array($row) || empty($row)) {
                continue;
            }

            // Calculate the geometric mean of the row
            $product = array_product($row);
            $geomean = pow($product, 1 / count($row));
            $geomeans[] = $geomean;
        }

        // Return the geomeans as a JSON response
        return $this->response->setJSON(['geomeans' => $geomeans]);
    }

    public function simpanDataKriteria()
    {
        try {
            // Parse JSON data from the request
            $inputData = $this->request->getJSON(true);
            log_message('info', 'Received Data: ' . json_encode($inputData));
    
            // Validate input data
            if (empty($inputData) || !isset($inputData['data'])) {
                log_message('error', 'Invalid data received.');
                return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Invalid data.']);
            }
    
            $data = $inputData['data'];
            log_message('info', 'Data structure: ' . json_encode($data));
    
            // Start transaction
            $this->db->transBegin();
    
            // Clear existing data
            $this->db->table('matriks_perbandingan_kriteria')->truncate();
    
            // Process and insert data
            $criteriaNames = $this->getCriteriaNames();
    
            for ($i = 0; $i < count($criteriaNames); $i++) {
                $rowData = [];
                for ($j = 0; $j < count($criteriaNames); $j++) {
                    if ($i == $j) {
                        $rowData[$criteriaNames[$j]] = 1; // Diagonal elements are 1
                    } else if ($i < $j) {
                        $rowData[$criteriaNames[$j]] = $data[$i][$j - $i - 1]; // Use provided data
                    } else {
                        $rowData[$criteriaNames[$j]] = 1 / $data[$j][$i - $j - 1]; // Reciprocal value
                    }
                }
                $this->db->table('matriks_perbandingan_kriteria')->insert($rowData);
            }
    
            // Commit transaction
            if ($this->db->transStatus() === FALSE) {
                $this->db->transRollback();
                log_message('error', 'Failed to save data.');
                return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => 'Failed to save data.']);
            } else {
                $this->db->transCommit();
                log_message('info', 'Data saved successfully.');
                return $this->response->setJSON(['status' => 'success']);
            }
        } catch (\Exception $e) {
            // Rollback transaction if there's an error
            $this->db->transRollback();
            log_message('error', 'Failed to save data: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
    

    private function getCriteriaNames()
    {
        // Assuming the criteria names follow a specific order.
        return ['harga', 'kualitas', 'waktu', 'kredibilitas', 'responsif'];
    }
    
    public function hapusDataKriteria()
    {
        $this->db->table('matriks_perbandingan_kriteria')->truncate();

        return $this->response->setJSON(['status' => 'success']);
    }

    public function getSavedData()
    {
        $query = $this->db->table('matriks_perbandingan_kriteria')->get();
        $result = $query->getResult();

        if (count($result) > 0) {
            $geomeans = json_decode($result[0]->geomeans);
            return $this->response->setJSON(['saved' => true, 'geomeans' => $geomeans]);
        } else {
            return $this->response->setJSON(['saved' => false]);
        }
    }
}