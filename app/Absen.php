<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $fillable = ['tgl_absen','siswa_id','keterangan'];
    public $timestamps = true;

    
    public function Siswa(){
    	return $this->belongsTo('App\Siswa','siswa_id');
    }
}
