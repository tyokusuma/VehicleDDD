<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelKendaraan extends Model
{
    protected $table = 'Kendaraan';
    
    protected $fillable = ['id','merk_kenderaan','warna_kenderaan','stok_kendaraan','tahun_produksi'];
}
