<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turmas extends Model
{
    protected $fillable = [
        'year',
        'level',
        'serie',
        'turn',
        'school_id',
    ];
    use HasFactory;
}
