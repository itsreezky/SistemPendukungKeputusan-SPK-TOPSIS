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

//////////////////////////////////////////////////////////

    // Penilaian Kriteria
    public function indexKriteria()
    {
        $kriteriaModel = new KriteriaModel();
        $data['kriteria'] = $kriteriaModel->findAll();

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
            $inputData = $this->request->getJSON(true);
            log_message('info', 'Received Data: ' . json_encode($inputData));
    
            if (empty($inputData) || !isset($inputData['data'])) {
                log_message('error', 'Invalid data received.');
                return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Invalid data.']);
            }
    
            $data = $inputData['data'];
            $criteriaNames = $this->getCriteriaNames();
    
            $this->db->transBegin();
            $this->db->table('matriks_perbandingan_kriteria')->truncate();
    
            $matrix = $this->buildMatrix($data, $criteriaNames);
    
            // Transpose the matrix
            $transposedMatrix = [];
            foreach ($matrix as $row) {
                foreach ($row as $key => $value) {
                    $transposedMatrix[$key][] = $value;
                }
            }
    
            // Remove the first element
            array_shift($transposedMatrix);
    
            foreach ($transposedMatrix as $nama_kriteria => $values) {
                $insertData = ['nama_kriteria' => $nama_kriteria];
                foreach ($criteriaNames as $criteria) {
                    if ($criteria == $nama_kriteria) {
                        $insertData[$criteria] = 1.0;
                    } else {
                        $insertData[$criteria] = $values[array_search($criteria, $criteriaNames)];
                    }
                }
                $this->db->table('matriks_perbandingan_kriteria')->insert($insertData);
            }
    
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
            $this->db->transRollback();
            log_message('error', 'Failed to save data: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
    
    private function getCriteriaNames()
    {
        return ['Harga', 'Kualitas', 'Waktu', 'Kredibilitas', 'Responsif'];
    }

    private function buildMatrix($data, $criteriaNames)
    {
        $matrix = [];

        for ($i = 0; $i < count($criteriaNames); $i++) {
            $rowData = ['nama_kriteria' => $criteriaNames[$i]];
            for ($j = 0; $j < count($criteriaNames); $j++) {
                if ($i == $j) {
                    $rowData[$criteriaNames[$j]] = 1.0;
                } else if ($i < $j) {
                    $rowData[$criteriaNames[$j]] = (float) $data[$i][$j - $i - 1];
                } else {
                    $rowData[$criteriaNames[$j]] = 1.0 / (float) $data[$j][$i - $j - 1];
                }
            }
            $matrix[] = $rowData;
        }

        return $matrix;
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

////////////////////////////////////////////////////////////////////////////////////////

    // Penilaian Harga
    public function indexHarga()
    {
        $alternatifModel = new AlternatifModel();
        $data['alternatif'] = $alternatifModel->findAll();

        return view('function/skala_nilaiHarga', $data);
    }

    public function hitungGeomeanHarga()
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
        $alternatifData = $data['data'];

        // Now iterate over the array and calculate geomean
        $geomeans = [];
        foreach ($alternatifData as $row) {
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

    public function getAletnatifNames()
    {
        return ['VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E'];
    }

    private function buildMatrixHarga($data, $alternatifNames)
    {
        $matrix = [];

        for ($i = 0; $i < count($alternatifNames); $i++) {
            $rowData = ['nama_alternatif' => $alternatifNames[$i]];
            for ($j = 0; $j < count($alternatifNames); $j++) {
                if ($i == $j) {
                    $rowData[$alternatifNames[$j]] = 1.0;
                } else if ($i < $j) {
                    $rowData[$alternatifNames[$j]] = (float) $data[$i][$j - $i - 1];
                } else {
                    $rowData[$alternatifNames[$j]] = 1.0 / (float) $data[$j][$i - $j - 1];
                }
            }
            $matrix[] = $rowData;
        }

        return $matrix;
    }

    public function simpanDataHarga()
    {
        try {
            $inputData = $this->request->getJSON(true);
            log_message('info', 'Received Data: ' . json_encode($inputData));
    
            if (empty($inputData) || !isset($inputData['data'])) {
                log_message('error', 'Invalid data received.');
                return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Invalid data.']);
            }
    
            $data = $inputData['data'];
            $alternatifNames = $this->getAletnatifNames();
    
            $this->db->transBegin();
            $this->db->table('matriks_perbandingan_harga')->truncate();
    
            $matrix = $this->buildMatrixHarga($data, $alternatifNames);
    
            // Transpose the matrix
            $transposedMatrix = [];
            foreach ($matrix as $row) {
                foreach ($row as $key => $value) {
                    $transposedMatrix[$key][] = $value;
                }
            }
    
            // Remove the first element
            array_shift($transposedMatrix);
    
            foreach ($transposedMatrix as $nama_alternatif => $values) {
                $insertData = ['vendor' => $nama_alternatif];
                foreach ($alternatifNames as $alternatif) {
                    if ($alternatif == $nama_alternatif) {
                        $insertData[$alternatif] = 1.0;
                    } else {
                        $insertData[$alternatif] = $values[array_search($alternatif, $alternatifNames)];
                    }
                }
                $this->db->table('matriks_perbandingan_harga')->insert($insertData);
            }
    
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
            $this->db->transRollback();
            log_message('error', 'Failed to save data: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }

    }

    public function hapusDataHarga()
    {
        $this->db->table('matriks_perbandingan_harga')->truncate();

        return $this->response->setJSON(['status' => 'success']);
    }

    public function getSavedDataHarga()
    {
        $query = $this->db->table('matriks_perbandingan_harga')->get();
        $result = $query->getResult();

        if (count($result) > 0) {
            $geomeans = json_decode($result[0]->geomeans);
            return $this->response->setJSON(['saved' => true, 'geomeans' => $geomeans]);
        } else {
            return $this->response->setJSON(['saved' => false]);
        }
    }

////////////////////////////////////////////////////////////////////////////////////////

    // Penilaian Kualitas
    public function indexKualitas()
    {
        $alternatifModel = new AlternatifModel();
        $data['alternatif'] = $alternatifModel->findAll();

        return view('function/skala_nilaiKualitas', $data);
    }

    public function hitungGeomeanKualitas()
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
        $alternatifData = $data['data'];

        // Now iterate over the array and calculate geomean
        $geomeans = [];
        foreach ($alternatifData as $row) {
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

    public function getAletnatifNamesKualitas()
    {
        return ['VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E'];
    }

    private function buildMatrixKualitas($data, $alternatifNames)
    {
        $matrix = [];

        for ($i = 0; $i < count($alternatifNames); $i++) {
            $rowData = ['nama_alternatif' => $alternatifNames[$i]];
            for ($j = 0; $j < count($alternatifNames); $j++) {
                if ($i == $j) {
                    $rowData[$alternatifNames[$j]] = 1.0;
                } else if ($i < $j) {
                    $rowData[$alternatifNames[$j]] = (float) $data[$i][$j - $i - 1];
                } else {
                    $rowData[$alternatifNames[$j]] = 1.0 / (float) $data[$j][$i - $j - 1];
                }
            }
            $matrix[] = $rowData;
        }

        return $matrix;
    }

    public function simpanDataKualitas()
    {
        try {
            $inputData = $this->request->getJSON(true);
            log_message('info', 'Received Data: ' . json_encode($inputData));
    
            if (empty($inputData) || !isset($inputData['data'])) {
                log_message('error', 'Invalid data received.');
                return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Invalid data.']);
            }
    
            $data = $inputData['data'];
            $alternatifNames = $this->getAletnatifNamesKualitas();
    
            $this->db->transBegin();
            $this->db->table('matriks_perbandingan_kualitas')->truncate();
    
            $matrix = $this->buildMatrixKualitas($data, $alternatifNames);

            // Transpose the matrix

            $transposedMatrix = [];

            foreach ($matrix as $row) {
                foreach ($row as $key => $value) {
                    $transposedMatrix[$key][] = $value;
                }
            }

            // Remove the first element
            array_shift($transposedMatrix);

            foreach ($transposedMatrix as $nama_alternatif => $values) {
                $insertData = ['vendor' => $nama_alternatif];
                foreach ($alternatifNames as $alternatif) {
                    if ($alternatif == $nama_alternatif) {
                        $insertData[$alternatif] = 1.0;
                    } else {
                        $insertData[$alternatif] = $values[array_search($alternatif, $alternatifNames)];
                    }
                }
                $this->db->table('matriks_perbandingan_kualitas')->insert($insertData);
            }

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
            $this->db->transRollback();
            log_message('error', 'Failed to save data: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }

    }

    public function hapusDataKualitas()
    {
        $this->db->table('matriks_perbandingan_kualitas')->truncate();

        return $this->response->setJSON(['status' => 'success']);
    }

    public function getSavedDataKualitas()
    {
        $query = $this->db->table('matriks_perbandingan_kualitas')->get();
        $result = $query->getResult();

        if (count($result) > 0) {
            $geomeans = json_decode($result[0]->geomeans);
            return $this->response->setJSON(['saved' => true, 'geomeans' => $geomeans]);
        } else {
            return $this->response->setJSON(['saved' => false]);
        }
    }

////////////////////////////////////////////////////////////////////////////////////////

    // Penilaian Waktu

    public function indexWaktu()
    {
        $alternatifModel = new AlternatifModel();
        $data['alternatif'] = $alternatifModel->findAll();

        return view('function/skala_nilaiWaktu', $data);
    }

    public function hitungGeomeanWaktu()
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
        $alternatifData = $data['data'];

        // Now iterate over the array and calculate geomean
        $geomeans = [];
        foreach ($alternatifData as $row) {
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

    public function getAletnatifNamesWaktu()
    {
        return ['VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E'];
    }

    private function buildMatrixWaktu($data, $alternatifNames)
    {
        $matrix = [];

        for ($i = 0; $i < count($alternatifNames); $i++) {
            $rowData = ['nama_alternatif' => $alternatifNames[$i]];
            for ($j = 0; $j < count($alternatifNames); $j++) {
                if ($i == $j) {
                    $rowData[$alternatifNames[$j]] = 1.0;
                } else if ($i < $j) {
                    $rowData[$alternatifNames[$j]] = (float) $data[$i][$j - $i - 1];
                } else {
                    $rowData[$alternatifNames[$j]] = 1.0 / (float) $data[$j][$i - $j - 1];
                }
            }
            $matrix[] = $rowData;
        }

        return $matrix;
    }

    public function simpanDataWaktu()
    {
        try {
            $inputData = $this->request->getJSON(true);
            log_message('info', 'Received Data: ' . json_encode($inputData));
    
            if (empty($inputData) || !isset($inputData['data'])) {
                log_message('error', 'Invalid data received.');
                return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Invalid data.']);
            }
    
            $data = $inputData['data'];
            $alternatifNames = $this->getAletnatifNamesWaktu();
    
            $this->db->transBegin();
            $this->db->table('matriks_perbandingan_waktu')->truncate();
    
            $matrix = $this->buildMatrixWaktu($data, $alternatifNames);

            // Transpose the matrix

            $transposedMatrix = [];

            foreach ($matrix as $row) {
                foreach ($row as $key => $value) {
                    $transposedMatrix[$key][] = $value;
                }
            }

            // Remove the first element
            array_shift($transposedMatrix);

            foreach ($transposedMatrix as $nama_alternatif => $values) {
                $insertData = ['vendor' => $nama_alternatif];
                foreach ($alternatifNames as $alternatif) {
                    if ($alternatif == $nama_alternatif) {
                        $insertData[$alternatif] = 1.0;
                    } else {
                        $insertData[$alternatif] = $values[array_search($alternatif, $alternatifNames)];
                    }
                }
                $this->db->table('matriks_perbandingan_waktu')->insert($insertData);
            }

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
            $this->db->transRollback();
            log_message('error', 'Failed to save data: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function hapusDataWaktu()
    {
        $this->db->table('matriks_perbandingan_waktu')->truncate();

        return $this->response->setJSON(['status' => 'success']);
    }

    public function getSavedDataWaktu()
    {
        $query = $this->db->table('matriks_perbandingan_waktu')->get();
        $result = $query->getResult();

        if (count($result) > 0) {
            $geomeans = json_decode($result[0]->geomeans);
            return $this->response->setJSON(['saved' => true, 'geomeans' => $geomeans]);
        } else {
            return $this->response->setJSON(['saved' => false]);
        }
    }

////////////////////////////////////////////////////////////////////////////////////////
    
    // Penilaian Kredibilitas

    public function indexKredibilitas()
    {
        $alternatifModel = new AlternatifModel();
        $data['alternatif'] = $alternatifModel->findAll();

        return view('function/skala_nilaiKredibilitas', $data);
    }

    public function hitungGeomeanKredibilitas()
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
        $alternatifData = $data['data'];

        // Now iterate over the array and calculate geomean
        $geomeans = [];
        foreach ($alternatifData as $row) {
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

    public function getAletnatifNamesKredibilitas()
    {
        return ['VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E'];
    }

    private function buildMatrixKredibilitas($data, $alternatifNames)
    {
        $matrix = [];

        for ($i = 0; $i < count($alternatifNames); $i++) {
            $rowData = ['nama_alternatif' => $alternatifNames[$i]];
            for ($j = 0; $j < count($alternatifNames); $j++) {
                if ($i == $j) {
                    $rowData[$alternatifNames[$j]] = 1.0;
                } else if ($i < $j) {
                    $rowData[$alternatifNames[$j]] = (float) $data[$i][$j - $i - 1];
                } else {
                    $rowData[$alternatifNames[$j]] = 1.0 / (float) $data[$j][$i - $j - 1];
                }
            }
            $matrix[] = $rowData;
        }

        return $matrix;
    }

    public function simpanDataKredibilitas()
    {
        try {
            $inputData = $this->request->getJSON(true);
            log_message('info', 'Received Data: ' . json_encode($inputData));
    
            if (empty($inputData) || !isset($inputData['data'])) {
                log_message('error', 'Invalid data received.');
                return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Invalid data.']);
            }
    
            $data = $inputData['data'];
            $alternatifNames = $this->getAletnatifNamesKredibilitas();
    
            $this->db->transBegin();
            $this->db->table('matriks_perbandingan_kredibilitas')->truncate();
    
            $matrix = $this->buildMatrixKredibilitas($data, $alternatifNames);

            // Transpose the matrix
            $transposedMatrix = [];
            foreach ($matrix as $row) {
                foreach ($row as $key => $value) {
                    $transposedMatrix[$key][] = $value;
                }
            }

            // Remove the first element
            array_shift($transposedMatrix);

            foreach ($transposedMatrix as $nama_alternatif => $values) {
                $insertData = ['vendor' => $nama_alternatif];
                foreach ($alternatifNames as $alternatif) {
                    if ($alternatif == $nama_alternatif) {
                        $insertData[$alternatif] = 1.0;
                    } else {
                        $insertData[$alternatif] = $values[array_search($alternatif, $alternatifNames)];
                    }
                }
                $this->db->table('matriks_perbandingan_kredibilitas')->insert($insertData);
            }

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
            $this->db->transRollback();
            log_message('error', 'Failed to save data: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function hapusDataKredibilitas()
    {
        $this->db->table('matriks_perbandingan_kredibilitas')->truncate();

        return $this->response->setJSON(['status' => 'success']);
    }

    public function getSavedDataKredibilitas()
    {
        $query = $this->db->table('matriks_perbandingan_kredibilitas')->get();
        $result = $query->getResult();

        if (count($result) > 0) {
            $geomeans = json_decode($result[0]->geomeans);
            return $this->response->setJSON(['saved' => true, 'geomeans' => $geomeans]);
        } else {
            return $this->response->setJSON(['saved' => false]);
        }
    }

////////////////////////////////////////////////////////////////////////////////////////

    // Penilaian Responsif

    public function indexResponsif()
    {
        $alternatifModel = new AlternatifModel();
        $data['alternatif'] = $alternatifModel->findAll();

        return view('function/skala_nilaiResponsif', $data);
    }

    public function hitungGeomeanResponsif()
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
        $alternatifData = $data['data'];

        // Now iterate over the array and calculate geomean
        $geomeans = [];
        foreach ($alternatifData as $row) {
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

    public function getAletnatifNamesResponsif()
    {
        return ['VENDOR_A', 'VENDOR_B', 'VENDOR_C', 'VENDOR_D', 'VENDOR_E'];
    }

    private function buildMatrixResponsif($data, $alternatifNames)
    {
        $matrix = [];

        for ($i = 0; $i < count($alternatifNames); $i++) {
            $rowData = ['nama_alternatif' => $alternatifNames[$i]];
            for ($j = 0; $j < count($alternatifNames); $j++) {
                if ($i == $j) {
                    $rowData[$alternatifNames[$j]] = 1.0;
                } else if ($i < $j) {
                    $rowData[$alternatifNames[$j]] = (float) $data[$i][$j - $i - 1];
                } else {
                    $rowData[$alternatifNames[$j]] = 1.0 / (float) $data[$j][$i - $j - 1];
                }
            }
            $matrix[] = $rowData;
        }

        return $matrix;
    }

    public function simpanDataResponsif()
    {
        try {
            $inputData = $this->request->getJSON(true);
            log_message('info', 'Received Data: ' . json_encode($inputData));
    
            if (empty($inputData) || !isset($inputData['data'])) {
                log_message('error', 'Invalid data received.');
                return $this->response->setStatusCode(400)->setJSON(['status' => 'error', 'message' => 'Invalid data.']);
            }
    
            $data = $inputData['data'];
            $alternatifNames = $this->getAletnatifNamesResponsif();
    
            $this->db->transBegin();
            $this->db->table('matriks_perbandingan_responsif')->truncate();
    
            $matrix = $this->buildMatrixResponsif($data, $alternatifNames);

            // Transpose the matrix
            $transposedMatrix = [];
            foreach ($matrix as $row) {
                foreach ($row as $key => $value) {
                    $transposedMatrix[$key][] = $value;
                }
            }

            // Remove the first element
            array_shift($transposedMatrix);

            foreach ($transposedMatrix as $nama_alternatif => $values) {
                $insertData = ['vendor' => $nama_alternatif];
                foreach ($alternatifNames as $alternatif) {
                    if ($alternatif == $nama_alternatif) {
                        $insertData[$alternatif] = 1.0;
                    } else {
                        $insertData[$alternatif] = $values[array_search($alternatif, $alternatifNames)];
                    }
                }
                $this->db->table('matriks_perbandingan_responsif')->insert($insertData);
            }

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
            $this->db->transRollback();
            log_message('error', 'Failed to save data: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function hapusDataResponsif()
    {
        $this->db->table('matriks_perbandingan_responsif')->truncate();

        return $this->response->setJSON(['status' => 'success']);
    }

    public function getSavedDataResponsif()
    {
        $query = $this->db->table('matriks_perbandingan_responsif')->get();
        $result = $query->getResult();

        if (count($result) > 0) {
            $geomeans = json_decode($result[0]->geomeans);
            return $this->response->setJSON(['saved' => true, 'geomeans' => $geomeans]);
        } else {
            return $this->response->setJSON(['saved' => false]);
        }

    }
}
