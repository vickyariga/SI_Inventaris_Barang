<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantor extends Model
{
    protected $table = 'kantor';
    protected $fillable = ['id_kantor', 'id_opd', 'nama_kantor', 'alamat', 'telp', 'email', 'website'];

    /*public function barangKantor()
    {
    	return $this->hasMany('App\BarangKantor');
    }*/                                                                                     

    public function barang()
    {
    	return $this->belongsToMany('App\Barang');
    }
}
