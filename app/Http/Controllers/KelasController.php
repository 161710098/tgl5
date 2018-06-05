<?php

namespace App\Http\Controllers;

use App\kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view ('kelas.index',compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p = Kelas::all();
        return view('kelas.create',compact('kelas'));
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
            'kelas'=>'required',
            'jurusan'=>'required',
            'wali_kelas'=>'required'
        ]);
        $kelas = new Kelas;
        $kelas->kelas = $request->kelas;
        $kelas->jurusan = $request->jurusan;
        $kelas->wali_kelas = $request->wali_kelas;
        $kelas->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect('kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit',compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'kelas' => 'required',
            'jurusan'=>'required',
            'wali_kelas'=>'required'
            ]);
        $kelas = Kelas::findOrFail($id);
        $kelas->kelas = $request->kelas;
        $kelas->jurusan = $request->jurusan;
        $kelas->wali_kelas = $request->wali_kelas;
        $kelas->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect()->route('kelas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index');
    }
}
