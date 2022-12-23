<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\Pengaduan;
use App\Models\Jenis_ternak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('complaint.complaint', [
        'pengaduan' => $pengaduan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get semua data
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        $jenis_ternak = Jenis_ternak::all();
        return view('complaint.complaint',compact('provinces','regencies','districts','villages','jenis_ternak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'nomer' => 'required',
            'email' => 'required',
            'tanggal' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' =>   'required',
            'keterangan' => 'required',
            'status' => 'required',
            'balasan' => 'required',
            'jenisHewan' => 'required',
            'foto' => 'image|file|max:1024',
            
        ]);
        $array = $request->only([
            'name', 'nomer', 'email','tanggal', 'provinsi', 'kabupaten'. 'kecamatan', 'desa','keterangan', 'status', 'balasan', 'jenisHewan', 'foto'
        ]);
        $pengaduan = Pengaduan::create($array);
        return route('generate-code-report.user')
            ->with('success_message', 'Berhasil mengirim Pengaduan');
    }

    public function popup(){

        $pengaduans = Pengaduan::all();
        return view('status.user', compact('pengaduans'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }

    // public function getKabupaten(Request $request){
    //     $id_provinsi = $request->id_provinsi;
    //     $kabupatens = Regency::where('province_id',$id_provinsi)->get();

    //     foreach ($kabupatens as $kabupaten){
    //         echo "<option value='$kabupaten->id'>$kabupaten->name</option>";
    //     }
    // }
}
