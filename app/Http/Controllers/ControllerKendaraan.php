<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ModelKendaraan;

class ControllerKendaraan extends Controller
{
  // public $kelasKendaraan;
    public function __construct(ServiceKendaraan $kelasKendaraan)
    {
        $this->kelasKendaraan = $kelasKendaraan;
    }
}
