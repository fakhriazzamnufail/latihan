<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\SantriModel;

class ApiController extends Controller
{
    public function login(Request $request) {
        $login = Auth::Attempt ($request->all());
        if ($login) {
            $user = Auth::user();
            return response()->json([
                'response_code' => 200,
                'message' => 'Login Berhasil',
                'content' => $user
            ]);
        }else{
            return response()->json([
                'response_code' => 404,
                'message' => 'username atau password tidak di temukan'
            ]);
        }
    }

    public function getSantri() {
        $santri = SantriModel::select('*')->get();
        if ($santri ) {
            return response()->json([
                'response_code' => 200,
                'message' => 'Tarik data santri berhasil',
                'data' => $santri
            ]);
        } else {
            return response()->json([
                'response_code' => 404,
                'message' => 'Tarik data GAGAL'
            ]);
        }
    }

    public function tambahSantri(Request $request) {
        $santri = SantriModel::create($request->all());
        if ($santri) {
            return response()->json([
                'response_code' => 200,
                'message' => 'Tambah data santri berhasil',
                'content' => $santri
            ]);
        } else {
            return response()->json([
                'response_code' => 404,
                'message' => 'Tambah data santri GAGAL'
            ]);
        }
    }

    public function hapusSantri(Request $request) {
        $santri = SantriModel::where('id', $request->id)->delete();
        if ($santri) {
            return response()->json([
                'response_code' => 200,
                'message' => 'Hapus data santri berhasil',
            ]);
        } else {
            return response()->json([
                'response_code' => 404,
                'message' => 'Hapus data santri GAGAL'
            ]);
        }
    }
    
}

//localhost:8000/api/santri/tambah?nama_santri=fulan&alamat_santri=padang&tanggal_lahir_santri=4-5-2008&jenis_kelamin_santri=Laki-laki&no_telp_santri=12131
