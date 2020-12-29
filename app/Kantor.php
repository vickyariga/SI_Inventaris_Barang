<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantor extends Model
{
    protected $table = 'kantor';
    protected $fillable = ['id_kantor', 'id_opd', 'nama_kantor', 'alamat', 'telp', 'email', 'website'];

    protected $primaryKey = 'id_kantor';

    public $incrementing = 'false';

    protected $keyType = 'string';


    public function barangs()
    {
        return $this->hasMany(Barang::class, 'id_kantor', 'id_kantor');
    }

    public function opd(){
        return $this->belongsTo(Opd::class, 'id_opd', 'id_opd');
    }
}
