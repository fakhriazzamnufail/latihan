<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PelajaranModel;
use Session;

class PelajaranController extends Controller
{
    public function TampilPelajaranFunction() {
        $pelajaran = PelajaranModel::select('*')
                ->get();

        return view('tampilpelajaran', compact('pelajaran'));
    }

     public function InputPelajaranFunction() {
        return view('inputpelajaran');
    }

    public function SimpanPelajaranFunction(Request $request) {
        $pelajaran = PelajaranModel::create([
            'nama_pelajaran' => $request->nama_pelajaran,
        ]);
        Session::flash('Pesan', 'Data berhasil di simpan!');
        return redirect('/pelajaran');
    }

    public function HapusPelajaranFunction($id_pelajaran) {
        $pelajaran = PelajaranModel::where('id_pelajaran', $id_pelajaran)
            ->delete();

        return redirect('/pelajaran');
    }

    public function EditPelajaranFunction($id_pelajaran) {
        $pelajaran = PelajaranModel::select('*')
            ->where('id_pelajaran', $id_pelajaran)
            ->first();

        return view('editpelajaran', compact('pelajaran'));
    }
    
    public function UpdatePelajaranFunction(Request $request) {
        $pelajaran = PelajaranModel::where('id_pelajaran', $request->id_pelajaran)
        ->update([
            'nama_pelajaran' => $request->nama_pelajaran,
        ]);
        Session::flash('Pesan', 'Data berhasil di ubah!');

        return redirect('/pelajaran');
    }

}
