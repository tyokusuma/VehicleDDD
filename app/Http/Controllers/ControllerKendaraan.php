<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControllerKendaraan extends Controller
{
  private $kelasKendaraan;
    public function __construct(KendaraanRepo $kelasKendaraan)
    {
        $this->kelasKendaraan = $kelasKendaraan;
    }
}
