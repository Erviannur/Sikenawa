<?php

namespace App\Models;

use App\Models\Lokasi;
use App\Models\Status;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengaduan extends Model
{
    use HasFactory;
    protected $table = 'pengaduans';
    protected $primaryKey = 'idPengaduan';
    protected $fillable = [

        'name',
        'nomer',
        'email',
        'tanggal',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'desa',
        'keterangan',
        'status',
        'balasan',
        


    ];

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->idPengaduan = IdGenerator::generate(['pengaduans' => $this->pengaduans, 'length' => 6, 'prefix' =>date('y')]);
    //     });
    // }

    // public function Lokasi(){
    //     return $this->hasMany(Lokasi::class);
    // }

    
}
