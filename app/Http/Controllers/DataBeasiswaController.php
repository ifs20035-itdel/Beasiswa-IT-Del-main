<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Kyslik\ColumnSortable\Sortable;
use App\Models\DataBeasiswa;
use App\Models\Prodi;
use App\Models\Angkatan;
use App\Models\BeasiswaEksternal;
use Alert;

class DataBeasiswaController extends Controller
{
    public function index($tahun){
        $year = $tahun;
        $dataBeasiswa = DataBeasiswa::select('data_beasiswa.*','prodi.nama_prodi')
        ->join('prodi','data_beasiswa.id_prodi','=','prodi.id_prodi' )
        ->where('tahun','=', $year)->sortable()->paginate(15);
        return view('databeasiswa.dataBeasiswa',
        [
            'year' => $year,
            'data'=> $dataBeasiswa
        ]);
    }

    public function create($tahun){   
        $programStudi = Prodi::all();
        $angkatan = Angkatan::all();
        $beasiswa = BeasiswaEksternal::all();
        return view('databeasiswa.createData',
        compact('programStudi', 'angkatan', 'beasiswa'),
        [
            'tahun' => $tahun
        ]
        );
    }

    public function store(Request $request, $tahun){
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'angkatan' => 'required',
            'beasiswa' => 'required',
            'tahunTerima' => 'required',
        ]);

        DataBeasiswa::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'id_prodi' => $request->id_prodi,
            'angkatan'=> $request->angkatan,
            'beasiswa'=> $request->beasiswa,
            'tahun'=> $tahun,
            'status'=> $request->status,
            'tahunTerima'=> $request->tahunTerima,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        Alert::success('Sukses', 'Data Telah Disimpan.');
        return redirect()->route('dataBeasiswa', $tahun);
    }

    public function destroy($id, $tahun){
        $dataBeasiswa = DataBeasiswa::findorfail($id);
        $dataBeasiswa->delete();
        Alert::success('Sukses', 'Data Berhasil Dihapus.');
        return redirect()->route('dataBeasiswa', $tahun);
    }
}