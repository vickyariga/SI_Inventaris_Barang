<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id_barang', 'nama_barang', 'id_kantor'];
    public $incrementing = 'false';
    protected $keyType = 'string';
    protected $primaryKey = 'id_barang';
    public $timestamps = false;

    public function kantor()
    {
        return $this->belongsTo(Kantor::class, 'id_kantor', 'id_kantor');
    }
}
