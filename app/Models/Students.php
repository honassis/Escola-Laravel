<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model {
 protected $fillable = [
  'name',
  'email',
  'tel',
  'birthday',
  'genre',
 ];

 use HasFactory;
}
