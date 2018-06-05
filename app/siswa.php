<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $fillable = ['nis','nama','jenis_kelamin','id_kelas'];
    public $timestamps = true;

    public function Kelas(){
    	return $this->belongsTo('App\Kelas','id_kelas');
    }
    
}
