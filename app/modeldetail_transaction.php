<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeldetail_transaction extends Model
{
  protected $table = 'transaction_detail';

  protected $fillable = ['id','kendaraan_id','harga','transaction_id'];
}
