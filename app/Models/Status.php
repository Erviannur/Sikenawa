<?php

namespace App\Models;

use App\Models\Pengaduan;
use App\Models\Notifikasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;
    protected $table = 'statuses';
    protected $primaryKey = 'idStatus';
    protected $fillable = [

        'idPengaduan',
        'diterima',
        'menuju_lokasi',
        'selesai',
        'balasan',
        'tanggal'

    ];
    public function Pengaduan(){
        return $this->belongTo(Pengaduan::class);

    }
    public function Notifikasi(){
        return $this->belongTo(Notifikasi::class);

    }
}
