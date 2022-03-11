<?php

namespace App\Http\Controllers;

use App\Models\DaftarKompetisiModel;
use Illuminate\Http\Request;

class DaftarKompetisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kompetisi.index',[
            'title' => 'Daftar Kompetisi',
            'kompetisi' => DaftarKompetisiModel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kompetisi.create',[
            'title' => 'Tambah Kompetisi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'nama_kompetisi' => 'required|max:255',
            'tanggal_kompetisi' => 'required',
            'kuota_peserta' => 'required'
        ]);
        DaftarKompetisiModel::create($validateData);
        return redirect()->to('/daftarkompetisi')->with('tambah', 'berhasil menambah kompetisi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.kompetisi.edit',[
            'title' => 'Edit Kompetisi',
            'kompetisi' => DaftarKompetisiModel::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validateData=$request->validate([
            'nama_kompetisi' => 'required|max:255',
            'tanggal_kompetisi' => 'required',
            'kuota_peserta' => 'required'
        ]);
        DaftarKompetisiModel::where('id', $id)->
                update($validateData);
        return redirect()->to('/daftarkompetisi')->with('edit', 'berhasil mengedit kompetisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarKompetisiModel::destroy($id);
        return redirect()->to('/daftarkompetisi')->with('hapus','Berhasil Menghapus');
    }
}
