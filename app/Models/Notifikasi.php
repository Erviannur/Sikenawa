<?php

namespace App\Models;

use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notifikasi extends Model
{
    use HasFactory;
    protected $table = 'Notifikasi';
    protected $primaryKey = 'idNotifikasi';
    protected $fillable = [

        'idNotifikasi',
        'idStatus',
        'tanggal'

    ];

    public function Status(){
        return $this->belongTo(Status::class);

    }
}
