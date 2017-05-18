<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMember extends Model
{
  protected $table = 'Member';

  protected $fillable = ['id','nama'];
}
