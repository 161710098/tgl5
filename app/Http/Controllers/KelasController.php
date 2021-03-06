<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Jurusan;
use Illuminate\Http\Request;
use Alert;
use DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        return view ('kelas.index',compact('jurusan','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
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
        $kelas = new Kelas;
        $kelas->id_jurusan = $request->nama_jur;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->walikelas = $request->walikelas;
        $kelas->save();
        return redirect('kelas');

        $this->validate($request,[
            'id_jurusan' => 'required',
            'nama_kelas' => 'required',
            'walikelas' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kelas  $kelas
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
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->id_jurusan = $request->nama_jur;
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->walikelas = $request->walikelas;
        $kelas->save();
        return redirect()->route('kelas.index');

        $this->validate($request,[
            'id_jurusan' => 'required',
            'nama_kelas' => 'required',
            'walikelas' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas=Kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index');
    }
}
