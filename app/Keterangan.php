<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    protected $fillable = ['keterangan'];
    public $timestamps = true;

    
    public function Keterangan(){
    	return $this->hasMany('App\Keterangan','kelas_id');
    
}
