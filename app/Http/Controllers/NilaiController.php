<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiModel;
use App\Models\SantriModel;
use App\Models\PengajarModel;
use App\Models\KelasModel;
use App\Models\PelajaranModel;
use PDF;
use Session;

class NilaiController extends Controller
{
    function TampilNilaiFunction()
    {
        $nilai = NilaiModel::select('*')
            ->leftjoin('tb_santri', 'tb_nilai.id_santri', '=', 'tb_santri.id_santri')
            ->leftjoin('tb_pengajar', 'tb_nilai.id_pengajar', '=', 'tb_pengajar.id_pengajar')
            ->leftjoin('tb_kelas', 'tb_nilai.id_kelas', '=', 'tb_kelas.id_kelas')
            ->leftjoin('tb_pelajaran', 'tb_nilai.id_pelajaran', '=', 'tb_pelajaran.id_pelajaran')
            ->get();

        return view('tampilnilai', compact('nilai'));
        
    }

    function InputNilaiFunction(){
        $santri = SantriModel::select('id_santri', 'nama_santri')
            ->get();

        $pengajar = PengajarModel::select('id_pengajar', 'nama_pengajar')
            ->get();

        $kelas = KelasModel::select('id_kelas', 'nama_kelas')
            ->get();

        $mapel = PelajaranModel::select('id_pelajaran', 'nama_pelajaran')
            ->get();

        return view('inputnilai', compact('santri', 'pengajar', 'kelas', 'mapel'));
        
    }

    function SimpanNilaiFunction(Request $request)
    {
        //nilai rapor = 40% latihan + 25% mid + 35% uas
        $rapor = ((($request->nilai_latihan1+$request->nilai_latihan2)/2)*0.4)+
        ($request->nilai_mid*0.25)+
        ($request->nilai_uas*0.35);

        $nilai = NilaiModel::create([ 
            'id_santri'         =>$request->id_santri,
            'id_pengajar'       =>$request->id_pengajar,
            'id_kelas'          =>$request->id_kelas,
            'id_pelajaran'      =>$request->id_pelajaran,
            'nilai_latihan1'    =>$request->nilai_latihan1,
            'nilai_latihan2'    =>$request->nilai_latihan2,
            'nilai_mid'         =>$request->nilai_mid,
            'nilai_uas'         =>$request->nilai_uas,
            'nilai_rapor'       =>$rapor,
        ]);
        return redirect('/nilai');
    }
    function CetakNilaiFunction()
    {
        $nilai = NilaiModel::select('*')
            ->leftjoin('tb_santri', 'tb_nilai.id_santri', '=', 'tb_santri.id_santri')
            ->leftjoin('tb_pengajar', 'tb_nilai.id_pengajar', '=', 'tb_pengajar.id_pengajar')
            ->leftjoin('tb_kelas', 'tb_nilai.id_kelas', '=', 'tb_kelas.id_kelas')
            ->leftjoin('tb_pelajaran', 'tb_nilai.id_pelajaran', '=', 'tb_pelajaran.id_pelajaran')
            ->get();

        $pdf = PDF::loadview('cetaknilai', compact('nilai'));
        return $pdf->stream('Laporan-Nilai-Santri.pdf');    
    }

    function HapusNilaiFunction($id_nilai)
    {
        $nilai = NilaiModel::where('id_nilai', $id_nilai)
        ->delete();

        return redirect('/nilai');
    }

    function EditNilaiFunction($id_nilai)
    {
        $santri = SantriModel::select('id_santri', 'nama_santri')
            ->get();

        $pengajar = PengajarModel::select('id_pengajar', 'nama_pengajar')
            ->get();

        $kelas = KelasModel::select('id_kelas', 'nama_kelas')
            ->get();

        $mapel = PelajaranModel::select('id_pelajaran', 'nama_pelajaran')
            ->get();
            
        $nilai = NilaiModel::select('*')
            ->where('id_nilai', $id_nilai)
            ->first();
            
        return view('editnilai', compact('santri', 'pengajar', 'kelas', 'mapel', 'nilai'));
    }
    function UpdateNilaiFunction(Request $request)
    {
        
        //nilai rapor = 40% latihan + 25% mid + 35% uas
        $rapor = ((($request->nilai_latihan1+$request->nilai_latihan2)/2)*0.4)+
        ($request->nilai_mid*0.25)+
        ($request->nilai_uas*0.35);
        $nilai = NilaiModel::where('id_nilai', $request->id_nilai)
            ->update([
            'id_santri'         =>$request->id_santri,
            'id_pengajar'       =>$request->id_pengajar,
            'id_kelas'          =>$request->id_kelas,
            'id_pelajaran'      =>$request->id_pelajaran,
            'nilai_latihan1'    =>$request->nilai_latihan1,
            'nilai_latihan2'    =>$request->nilai_latihan2,
            'nilai_mid'         =>$request->nilai_mid,
            'nilai_uas'         =>$request->nilai_uas,
            'nilai_rapor'       =>$rapor,
        ]);
        return redirect('/nilai');
    }
    
}
