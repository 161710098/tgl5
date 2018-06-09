<?php

namespace App\Http\Controllers;

use App\Absen;
use App\Siswa;
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
        $p = Siswa::all();
        return view('absen.create',compact('p'));
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
            'siswa_id'=>'required',
            'id_keterangan'=>'required'
        ]);
        $absen = new Absen;
        $absen->tgl_absen = $request->tgl_absen;
        $absen->siswa_id = $request->siswa_id;
        $absen->id_keterangan = $request->id_keterangan;
        $absen->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect('absensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = Absen::findOrFail($id);
        return view('absen.show',compact('absen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absen = Absen::all();
        return view('absen.create',compact('absen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'tgl_absen' => 'required',
            'kelas'=>'required',
            'siswa_id'=>'required',
            'id_keterangan'=>'required'
            ]);
        $absen = Absen::findOrFail($id);
        $absen->tgl_absen = $request->tgl_absen;
        $absen->kelas = $request->kelas;
        $absen->siswa_id = $request->siswa_id;
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
    public function destroy($id)
    {
        $absen = Absen::findOrFail($id);
        $absen->delete();
        return redirect()->route('absen.index');
    }
}
