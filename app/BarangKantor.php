<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangKantor extends Model
{
    protected $table = 'barang_kantor';
    protected $fillable = ['id_barang', 'id_kantor'];

    protected $keyType = 'string';
    protected $primaryKey = 'id_barang';
    public $incrementing = 'false';

    public function barang()
    {
    	return $this->belongsTo('App\Barang');
    }

    public function kantor()
    {
    	return $this->belongsTo('App\Kantor');
    }
}
