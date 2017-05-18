<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelTransaction extends Model
{
  protected $table = 'Transaction';

  protected $fillable = ['id','nama_pembeli','jenis_produk','jumlah'];
}
