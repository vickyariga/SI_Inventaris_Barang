<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangKantor extends Model
{
    protected $table = 'barang_kantor';
    protected $fillable = ['id_barang', 'id_kantor'];

    public function barang()
    {
    	return $this->belongsTo('App\Barang');
    }

    public function kantor()
    {
    	return $this->belongsTo('App\Kantor');
    }
}
