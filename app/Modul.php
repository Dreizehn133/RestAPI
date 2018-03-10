<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modul extends Model
{
  //  protected $table = 'modul';
  // const CREATED_AT = 'insert_pada';
  // const UPDATED_AT = 'ubah_pada';
  protected $primaryKey = 'mod_id';
  public $incrementing = false;
}
