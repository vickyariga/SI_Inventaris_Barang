<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['id_laporan', 'id_kantor'];

    public function jenisLaporan()
    {
    	return $this->hasMany('App\JenisLaporan');
    }

    public function kantor()
    {
    	return $this->belongsToMany('App\Kantor', 'jenis_laporan');
    }
}
