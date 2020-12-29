<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
	protected $table = 'opd';

	protected $guarded = [];

    public function kantor()
    {
    	return $this->belongsTo('App\Kantor');
    }
}
