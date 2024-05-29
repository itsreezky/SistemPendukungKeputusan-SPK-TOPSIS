<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SkalanilaiController extends BaseController
{
    public function index()
    {

        return view('function/skalanilai');
    }
}
