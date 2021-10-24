<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escolas extends Model
{
    protected $fillable = [
        'name',
        'adress'
    ];
    use HasFactory;
}
