<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
	protected $table = 'opd';

	protected $guarded = [];

	protected $primaryKey = 'id_opd';

	public $incrementing = 'false';

	protected $keyType = 'string';

    public function kantors()
    {
        return $this->hasMany(Kantor::class, 'id_opd', 'id_opd');
    }

}
