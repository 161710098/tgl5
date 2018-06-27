<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Siswa;
use App\Kelas;
use Illuminate\Http\Request;
use DB;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        $absensi = Absensi::all();
        return view ('absensi.index',compact('absensi','siswa','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $absensi = Absensi::all();
        return view('absensi.create',compact('absensi'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $absensi = new Absensi;
        $absensi->id_siswa = $request->a;
        $absensi->id_kelas = $request->b;
        $siswa = Siswa::findOrFail($request->a);
        $absensi->keterangan = $request->c;
        $absensi->tgl = $request->d;
        $absensi->save();
        return redirect('absensi');

        $this->validate($request,[
            'id_siswa' => 'required',
            'id_kelas' => 'required',
            'keterangan' => 'required',
            'tgl' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $absensi = Absensi::findOrFail($id);
        return view('absensi.edit',compact('absensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->id_siswa = $request->a;
        $absensi->id_kelas = $request->b;
        $siswa = Siswa::findOrFail($request->a);
        $absensi->keterangan = $request->c;
        $absensi->tgl = $request->d;
        $absensi->save();
        return redirect()->route('absensi.index');

        $this->validate($request,[
            'id_siswa' => 'required',
            'id_kelas' => 'required',
            'keterangan' => 'required',
            'tgl' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Absensi  $absensi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $absensi=Absensi::findOrFail($id);
        $absensi->delete();
        return redirect()->route('absensi.index');
    }
}
