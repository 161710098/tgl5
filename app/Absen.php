<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    protected $fillable = ['tgl_absen','kelas','id_siswa','id_keterangan'];
    public $timestamps = true;

    
    public function Siswa(){
        return $this->belongsTo('App\Siswa','kelas_id');
    }
        public function Keterangan(){
            return $this->belongsTo('App\Keterangan','kelas_id');
}
}