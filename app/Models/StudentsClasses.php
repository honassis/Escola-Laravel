<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsClasses extends Model {
 protected $fillable = [
  'student_id',
  'classes_id',
 ];
 use HasFactory;
}
