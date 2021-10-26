<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model {
 protected $fillable = [
  'year',
  'level',
  'serie',
  'turn',
  'school_id',
  'school_name',
 ];
 use HasFactory;
}
