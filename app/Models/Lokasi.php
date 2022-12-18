<?php

namespace App\Models;

use App\Models\Pengaduan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lokasi extends Model
{
    use HasFactory;
    protected $table = 'lokasis';
    protected $primaryKey = 'idLokasi';
    
    protected $fillable =[

        'nama_kecamatan',
        'latitude',
        'longitude'

    ];

    public function Pengaduan(){
        return $this->hasMany(Pengaduan::class);
    }

}
