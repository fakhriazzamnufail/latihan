<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SantriModel;
use App\Models\PengajarModel;
use App\Models\KelasModel;
use App\Models\PelajaranModel;
use App\Models\NilaiModel;
use PDF;

class RaporController extends Controller
{
    public function RaporFunction(){
        $santri = SantriModel::select('*')
            ->get();
        return view('rapor', compact('santri'));


}

    function TampilRaporFunction()
    {
        $rapor = SantriModel::select('*')
            ->get();

        return view('tampilrapor', compact('rapor'));
    }

    function CetakRaporFunction($id_santri)
    {
        $rapor  = NilaiModel::select('*')
            ->leftJoin('tb_santri', 'tb_nilai.id_santri', '=', 'tb_santri.id_santri')
            ->leftJoin('tb_pelajaran', 'tb_nilai.id_pelajaran', '=', 'tb_pelajaran.id_pelajaran')
            ->where('tb_nilai.id_santri', $id_santri)
            ->get();
            
        $pdf = PDF::loadView('cetakrapor',compact('rapor'));
        return $pdf->stream('Rapor-Santri-pdf');
    }
}