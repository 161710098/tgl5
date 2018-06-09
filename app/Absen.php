<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $fillable = ['tgl_absen','kelas','siswa_id','id_keterangan'];
    public $timestamps = true;

    

    public function Siswa(){
    	return $this->belongsTo('App\Siswa','siswa_id');
    }
    public function Keterangan(){
    	return $this->belongsTo('App\Keterangan','id_keterangan');
    }
}
