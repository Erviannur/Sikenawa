<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Lokasi;
use App\Models\Jenis_ternak;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(IndoRegionSeeder::class);

        User::create([
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);

        Jenis_ternak::create([
            'name' => 'Sapi'
        ]);
        Jenis_ternak::create([
            'name' => 'Kambing'
        ]);
        Jenis_ternak::create([
            'name' => 'Unggas'
        ]);
        Jenis_ternak::create([
            'name' => 'Ayam'
        ]);
        Jenis_ternak::create([
            'name' => 'Kuda'
        ]);



        // Lokasi::create(
        // [   //lokasi1
        //     'nama_kecamatan' => 'Pesanggaran',
        //     'latitude' => '-8.510429',
        //     'longitude' => '113.977437',
        // ],);
        // Lokasi::create(
        // [   //lokasi2
        //     'nama_kecamatan' => 'Bangorejo',
        //     'latitude' => '-8.50894',
        //     'longitude' => '114.155826',
        // ],);
        // Lokasi::create(
        // [   //lokasi3
        //     'nama_kecamatan' => 'Purwoharjo',
        //     'latitude' => '-8.543332',
        //     'longitude' => '114.250938',
        // ],);
        // Lokasi::create(
        // [   //lokasi4
        //     'nama_kecamatan' => 'Tegaldlimo ',
        //     'latitude' => '-8.523126',
        //     'longitude' => '114.289507',
        // ],);
        // Lokasi::create(
        // [   //lokasi5
        //     'nama_kecamatan' => 'Muncar',
        //     'latitude' => '-8.4480167',
        //     'longitude' => '114.3103718',
        // ],);
        // Lokasi::create(
        // [   //lokasi6
        //     'nama_kecamatan' => 'Cluring',
        //     'latitude' => '-8.443318',
        //     'longitude' => '114.227162',
        // ],);
        // Lokasi::create(
        // [   //lokasi7
        //     'nama_kecamatan' => 'Gambiran',
        //     'latitude' => '-6.790078',
        //     'longitude' => '111.493171',
        // ],);
        // Lokasi::create(
        // [   //lokasi8
        //     'nama_kecamatan' => 'Srono',
        //     'latitude' => '-8.399762',
        //     'longitude' => '114.261299',
        // ],);
        // Lokasi::create(
        // [   //lokasi9
        //     'nama_kecamatan' => 'Genteng',
        //     'latitude' => '-8.366583',
        //     'longitude' => '114.146301',
        // ],);
        // Lokasi::create(
        // [   //lokasi10
        //     'nama_kecamatan' => 'Glenmore',
        //     'latitude' => '-8.299644',
        //     'longitude' => '114.04947',
        // ],);
        // Lokasi::create(
        // [   //lokasi11
        //     'nama_kecamatan' => 'Kalibaru',
        //     'latitude' => '-8.289147',
        //     'longitude' => '113.984385',
        // ],);
        // Lokasi::create(
        // [   //lokasi12
        //     'nama_kecamatan' => 'Singojuruh',
        //     'latitude' => '-8.3200799',
        //     'longitude' => '114.2509376',
        // ],);
        // Lokasi::create(
        // [   //lokasi13
        //     'nama_kecamatan' => 'Songgon',
        //     'latitude' => '-8.136084',
        //     'longitude' => '114.120154',
        // ],);
        // [   //lokasi14
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi15
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi16
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi17
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi18
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi19
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi20
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi21
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi22
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi23
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi24
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi25
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],
        // [   //lokasi26
        //     'nama_kecamatan' => '',
        //     'latitude' => '',
        //     'longitude' => '',
        // ],

    }
}
