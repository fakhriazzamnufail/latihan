<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NilaiController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/tampil', function () {
//    return view('tampilsantri');
//});
//  login
Route::get('/', [LoginController::class, 'LoginFunction']);
Route::post('actionlogin', [LoginController::class, 'ActionLoginFunction']);
Route::get('actionlogout', [LoginController::class, 'ActionLogoutFunction']);

//register
Route::get('register', [RegisterController::class, 'RegisterFunction']);
Route::post('actionregister', [RegisterController::class, 'ActionRegisterFunction']);


// Home
Route::get('/home', [HomeController::class, 'HomeFunction'])->middleware('auth');

//pengajar
Route::get('/pengajar', [PengajarController::class, 'TampilPengajarFunction'])->middleware('auth');
Route::get('/inputpengajar', [PengajarController::class, 'InputPengajarFunction'])->middleware('auth');
Route::post('/pengajar/simpan', [PengajarController::class, 'SimpanPengajarFunction'])->middleware('auth');
Route::get('/pengajar/hapus/{id_pengajar}', [PengajarController::class, 'HapusPengajarFunction'])->middleware('auth');
Route::get('/pengajar/edit/{id_pengajar}', [PengajarController::class, 'EditPengajarFunction'])->middleware('auth');
Route::post('/pengajar/update', [PengajarController::class, 'UpdatePengajarFunction'])->middleware('auth');

//santri
Route::get('/santri', [SantriController::class, 'TampilFunction'])->middleware('auth');
Route::get('/inputsantri', [SantriController::class, 'InputSantriFunction'])->middleware('auth');
Route::post('/santri/simpan', [SantriController::class, 'SimpanSantriFunction'])->middleware('auth');
Route::get('/santri/hapus/{id_santri}', [SantriController::class, 'HapusSantriFunction'])->middleware('auth');
Route::get('/santri/edit/{id_santri}', [SantriController::class, 'EditSantriFunction'])->middleware('auth');
Route::post('/santri/update', [SantriController::class, 'UpdateSantriFunction'])->middleware('auth');

//kelas
Route::get('/kelas', [KelasController::class, 'TampilKelasFunction'])->middleware('auth');
Route::get('/input/kelas', [KelasController::class, 'InputKelasFunction'])->middleware('auth');
Route::post('/kelas/simpan', [KelasController::class, 'SimpanKelasFunction'])->middleware('auth');
Route::get('/kelas/hapus/{id_kelas}', [KelasController::class, 'HapusKelasFunction'])->middleware('auth');
Route::get('/kelas/edit/{id_kelas}', [KelasController::class, 'EditKelasFunction'])->middleware('auth');
Route::post('/kelas/update', [KelasController::class, 'UpdateKelasFunction'])->middleware('auth');
 
//Pelajaran
Route::get('/pelajaran', [PelajaranController::class, 'TampilPelajaranFunction'])->middleware('auth');
Route::get('/input/pelajaran', [PelajaranController::class, 'InputPelajaranFunction'])->middleware('auth');
Route::post('/pelajaran/simpan', [PelajaranController::class, 'SimpanPelajaranFunction'])->middleware('auth');
Route::get('/pelajaran/hapus/{id_pelajaran}', [PelajaranController::class, 'HapusPelajaranFunction'])->middleware('auth');
Route::get('/pelajaran/edit/{id_pelajaran}', [PelajaranController::class, 'EditPelajaranFunction'])->middleware('auth');
Route::post('/pelajaran/update', [PelajaranController::class, 'UpdatePelajaranFunction'])->middleware('auth');

//Nilai
Route::get('/nilai', [NilaiController::class, 'TampilNilaiFunction'])->middleware('auth');
Route::get('/inputnilai', [NilaiController::class, 'InputNilaiFunction'])->middleware('auth');
Route::post('/nilai/simpan', [NilaiController::class, 'SimpanNilaiFunction'])->middleware('auth');
Route::get('/nilai/cetak', [NilaiController::class, 'CetakNilaiFunction'])->middleware('auth');
Route::get('/nilai/hapus/{id_nilai}', [NilaiController::class, 'HapusNilaiFunction'])->middleware('auth');
Route::get('/nilai/edit/{id_nilai}', [NilaiController::class, 'EditNilaiFunction'])->middleware('auth');
Route::post('/nilai/update', [NilaiController::class, 'UpdateNilaiFunction'])->middleware('auth');
