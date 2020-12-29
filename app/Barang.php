<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $fillable = ['id_barang', 'nama_barang'];
    public $incrementing = 'false';
    protected $keyType = 'string';

}
