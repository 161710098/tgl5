<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable=['id_kelas','nama_siswa','nis','alamat','no_hp'];
    protected $visible=['id_kelas','nama_siswa','nis','alamat','no_hp'];
    public $timestamps=true;

   
    public function kelas()
    {
    	return $this->belongsTo('App\kelas','id_kelas');
    }

    public function absensi()
    {
        return $this->hasMany('App\absensi','id_siswa');
    }
}
