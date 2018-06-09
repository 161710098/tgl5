<?php

namespace App\Http\Controllers;

use App\Keterangan;
use Illuminate\Http\Request;

class KeteranganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keterangan = Keterangan::all();
        return view ('keterangan.index',compact('keterangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keterangan = Keterangan::all();
        return view('keterangan.create',compact('keterangan'));

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
            'keterangan'=>'required',
        ]);
        $keterangan = new Keterangan;
        $keterangan->keterangan = $request->keterangan;
        $keterangan->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect()->route('keterangan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keterangan = Keterangan::findOrFail($id);
        return view('keterangan.show',compact('keterangan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $keterangan = Keterangan::all();
        return view('keterangan.create',compact('keterangan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request,[
            'keterangan' => 'required',
            ]);
        $keterangan = Keterangan::findOrFail($id);
        $keterangan->keterangan = $request->keterangan;
        $keterangan->save();
        // Alert::success('Tambah Data','Berhasil')->autoclose(1500);
        return redirect()->route('keterangan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keterangan  $keterangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $keterangan = Keterangan::findOrFail($id);
        $keterangan->delete();
        return redirect()->route('keterangan.index');
    }
}
