<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Kelas;
use App\OrangTua;
use Illuminate\Http\Request;
use Alert;
use DB;

class SiswaController extends Controller
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
        return view ('siswa.index',compact('siswa','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $siswa = Siswa::all();
        return view('siswa.create',compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa;
        $siswa->id_kelas = $request->b;
        $siswa->nama_siswa = $request->a;
        $siswa->nis = $request->c;
        $siswa->alamat = $request->d;
        $siswa->no_hp = $request->e;
        $siswa->save();
        return redirect('siswa');

        $this->validate($request,[
            'id_kelas' => 'required',
            'nis' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show',compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $siswa = Siswa::findOrFail($id);
        return view('siswa.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->id_kelas = $request->b;
        $siswa->nama_siswa = $request->a;
        $siswa->nis = $request->c;
        $siswa->alamat = $request->d;
        $siswa->no_hp = $request->e;
        $siswa->save();
        return redirect()->route('siswa.index');

        $this->validate($request,[
            'id_kelas' => 'required',
            'nis' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa=siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index');

    }
}
