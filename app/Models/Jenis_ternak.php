<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_ternak extends Model
{
    use HasFactory;
    protected $table = 'jenis_ternak';
    protected $primaryKey = 'id';
    protected $fillable = [

        'name'

    ];
}
