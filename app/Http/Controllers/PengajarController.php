<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajarModel;
use Session;


class PengajarController extends Controller
{
    public function TampilPengajarFunction() {
        $pengajar = PengajarModel::select('*')
                ->get();

        return view('tampilpengajar', compact('pengajar'));
    }

    public function InputPengajarFunction() {
        return view('inputpengajar');
    }

    public function SimpanPengajarFunction(Request $request) {
        $pengajar = PengajarModel::create([
            'nama_pengajar' => $request->nama_pengajar,
            'alamat_pengajar' => $request->alamat_pengajar,
        ]);

        Session::flash('Pesan', 'Data berhasil di simpan!');

        return redirect('/pengajar');
    }

    public function HapusPengajarFunction($id_pengajar) {
        $pengajar = PengajarModel::where('id_pengajar', $id_pengajar)
            ->delete();

        return redirect('/pengajar');
    }

    public function EditPengajarFunction($id_pengajar) {
        $pengajar = PengajarModel::select('*')
            ->where('id_pengajar', $id_pengajar)
            ->first(); // untuk menselect 1 baris saja

        

        return view('editpengajar', compact('pengajar'));
    }
    
    public function UpdatePengajarFunction(Request $request) {
        $pengajar = PengajarModel::where('id_pengajar', $request->id_pengajar)
        ->update([
            'nama_pengajar' => $request->nama_pengajar,
            'alamat_pengajar' => $request->alamat_pengajar,
        ]);
        Session::flash('Pesan', 'Data berhasil di ubah!');
        return redirect('/pengajar');
    }
}
