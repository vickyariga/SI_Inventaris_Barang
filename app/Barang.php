<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id_barang', 'nama_barang'];

    public function barangKantor()
    {
    	return $this->hasMany('App\BarangKantor');
    }

    public function kantor()
    {
    	return $this->belongsToMany('App\Kantor', 'barang_kantor');
    }
}
