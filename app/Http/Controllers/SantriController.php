<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SantriModel;
use Session;

class SantriController extends Controller
{
    public function TampilFunction() {
        $santri = SantriModel::select('*')
                ->get();
        
        return view('tampilsantri', compact('santri'));
    }

    public function InputSantriFunction() {
        return view('inputsantri');
    }

    public function SimpanSantriFunction(Request $request) {
        $santri = SantriModel::create([
            'nama_santri' => $request->nama_santri,
            'alamat_santri' => $request->alamat_santri,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'telp_santri' => $request->telp_santri
        ]);

        Session::flash('Pesan', 'Data berhasil di simpan!');
        return redirect('/santri');
    }

    public function HapusSantriFunction($id_santri) {
        $santri = SantriModel::where('id_santri', $id_santri)
            ->delete();

        return redirect('/santri');
    }

    public function EditSantriFunction($id_santri) {
        $santri = SantriModel::select('*')
            ->where('id_santri', $id_santri)
            ->first(); // untuk menselect 1 baris saja

        
        return view('editsantri', compact('santri'));
    }
    
    public function UpdateSantriFunction(Request $request) {
        $santri = SantriModel::where('id_santri', $request->id_santri)
        ->update([
            'nama_santri' => $request->nama_santri,
            'alamat_santri' => $request->alamat_santri,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'telp_santri' => $request->telp_santri
        ]);
        Session::flash('Pesan', 'Data berhasil di ubah!');
        return redirect('/santri');
    }
}
