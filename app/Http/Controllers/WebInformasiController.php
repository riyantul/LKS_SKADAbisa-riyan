<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarPesertaModel;

class WebInformasiController extends Controller
{
    public function index(){
        return view('webinformasi.webinformasi');
    }
    public function profil(){
        return view('webinformasi.profilperusahaan');
    } 
    public function lomba(){
        return view('webinformasi.lomba');
    } 
    public function pesertadaftarlomba(){
        return view('webinformasi.pesertadaftarlomba');
    } 
    public function store(Request $request){
        $validateData=$request->validate([
            'nama_peserta' => 'required|max:255',
            'tanggal_lahir' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'jenis_lomba' => 'required'
        ]);
        DaftarPesertaModel::create($validateData);
        return redirect()->to('/pesertadaftarlomba')->with('tambah', 'berhasil daftar kompetisi');
    } 
}