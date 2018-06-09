<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    protected $fillable = ['keterangan'];
    public $timestamps = true;

    
    public function Absen(){
    	return $this->hasMany('App\Absen','id_keterangan');
    
}
}
