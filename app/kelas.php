<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $fillable = ['kelas','jurusan','wali_kelas'];
    public $timestamps = true;

    
    public function Siswa(){
    	return $this->hasMany('App\Siswa','kelas_id');
    
}
}