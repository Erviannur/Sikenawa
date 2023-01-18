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
    public function index()
    {
        return view('complaint.complaint', [
        'pengaduan' => $pengaduan]);
    }

    public function create()
    {
        $provinces = Province::all();
        $jenis_ternak = Jenis_ternak::all();
        return view('complaint.complaint', compact('provinces', 'jenis_ternak'));
    }

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
            'jenisHewan' => 'required',

        ]);

        $array = $request->only([
            'name', 'nomer', 'email','tanggal', 'provinsi', 'kabupaten', 'kecamatan', 'desa','keterangan', 'jenisHewan'
        ]);
        if ($image = $request->file('foto')) {
            $destinationPath = 'foto/';
            $profileImage = date('Ymd') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $fotopath = $destinationPath."$profileImage";
            $array = array_merge($array, ['foto' => $fotopath]);
        }

        $pengaduan = Pengaduan::create($array);
        return redirect('generate-code-report/'.$pengaduan->idPengaduan)->with('success_message', 'Berhasil mengirim Pengaduan');
    }

    public function popup(){

        $pengaduans = Pengaduan::all();
        return view('status.user', compact('pengaduans'));
    }

    public function show(Pengaduan $pengaduan)
    {
        //
    }

    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    public function update(Request $request, Pengaduan $pengaduan)
    {
        foreach($request->id as $key => $value){

            // Find record to update with Model as your table model
    
            $record = Pengaduan::find($value);
    
            $record->balasan = $request->balasan[$key];
    
            $record->save();
        }
    }

    public function destroy(Pengaduan $pengaduan)
    {
        //
    }

    public function generateCode($id)
    {
        return view('complaint.generate-code', compact('id'));
    }

    public function getKabupaten(Request $request){
        $id_provinsi = $request->id;
        $kabupaten = Regency::where('province_id', $id_provinsi)->get();

        return response()->json($kabupaten);
    }

    public function getKecamatan(Request $request){
        $id_kabupaten = $request->id;
        $kecamatan = District::where('regency_id', $id_kabupaten)->get();

        return response()->json($kecamatan);
    }

    public function getDesa(Request $request){
        $id_kecamatan = $request->id;
        $desa = Village::where('district_id', $id_kecamatan)->get();

        return response()->json($desa);
    }
}
