<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListUserController;
use App\Http\Controllers\DaftarKompetisiController;
use App\Http\Controllers\DaftarPesertaController;
use App\Http\Controllers\DaftarPenilaianController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\WebInformasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('webinformasi');
// });

// web informasi
Route::get('/', [WebInformasiController::class,'index']);
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);
Route::get('/register',[LoginController::class, 'register']);
Route::post('/register',[LoginController::class, 'store']);
Route::get('/logout',[LoginController::class, 'logout']);
Route::get('/profil' ,[WebInformasiController::class,'profil']);
Route::get('/lomba' ,[WebInformasiController::class,'lomba']);
Route::get('/pesertadaftarlomba' ,[WebInformasiController::class,'pesertadaftarlomba']);
Route::post('/pesertadaftarlomba' ,[WebInformasiController::class,'store']);
Route::get('/game' ,[WebInformasiController::class,'game']);


// admin
Route::resource('/admin', AdminController::class);
Route::resource('/listuser', listUserController::class);
Route::resource('/daftarkompetisi', DaftarKompetisiController::class);
Route::resource('/daftarpeserta', DaftarPesertaController::class);
Route::resource('/daftarpenilaian', DaftarPenilaianController::class);
Route::resource('/laporan', LaporanController::class);
