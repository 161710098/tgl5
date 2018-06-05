<?php

namespace App\Http\Controllers;

use App\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absen = Absen::all();
        return view ('absen.index',compact('absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $absen = Absen::all();
        return view('absen.create',compact('absen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'tgl_absen'=>'required',
            'kelas'=>'required',
            'id_siswa'=>'required'
            'id_keterangan'=>'required'
            
        ]);
        $absen = new Keterangan;
        $absen->tgl_absen = $request->tgl_absen;
        $absen->kelas = $request->kelas;
        $absen->id_siswa = $request->id_siswa;
        $absen->id_keterangan = $request->id_keterangan;
        $absen->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect('keterangan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        $absen = Absen::findOrFail($id);
        return view('siswa.show',compact('absen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        $absen = Absen::findOrFail($id);
        return view('kelas.edit',compact('absen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        $this->validate($request,[
            'tgl_absen' => 'required',
            'kelas'=>'required',
            'id_siswa'=>'required'
            'id_keterangan'=>'required'
            ]);
        $absen = Absen::findOrFail($id);
        $absen->tgl_absen = $request->tgl_absen;
        $absen->kelas = $request->kelas;
        $absen->id_keterangan = $request->id_keterangan;
        $absen->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect()->route('absen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absen)
    {
        $absen = Absen::findOrFail($id);
        $absen->delete();
        return redirect()->route('absen.index');
    }
}
