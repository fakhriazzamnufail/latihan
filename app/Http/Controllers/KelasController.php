<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasModel;
use Session;

class KelasController extends Controller
{
    public function TampilKelasFunction() {
        $kelas = KelasModel::select('*')
                ->get();
        
        return view('tampilkelas', compact('kelas'));
    }

    public function InputKelasFunction() {
        return view('inputkelas');
    }

    public function SimpanKelasFunction(Request $request) {
        $kelas = KelasModel::create([
            'nama_kelas' => $request->nama_kelas,
        ]);
        Session::flash('Pesan', 'Data berhasil di simpan!');
        return redirect('/kelas');
    }

    public function HapusKelasFunction($id_kelas) {
        $kelas = KelasModel::where('id_kelas', $id_kelas)
            ->delete();

        return redirect('/kelas');
    }

    public function EditKelasFunction($id_kelas) {
        $kelas = KelasModel::select('*')
            ->where('id_kelas', $id_kelas)
            ->first();

        return view('editkelas', compact('kelas'));
    }
    
    public function UpdateKelasFunction(Request $request) {
        $kelas = KelasModel::where('id_kelas', $request->id_kelas)
        ->update([
            'nama_kelas' => $request->nama_kelas,
        ]);
        Session::flash('Pesan', 'Data berhasil di ubah!');

        return redirect('/kelas');
    }
}
