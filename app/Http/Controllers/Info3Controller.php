<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kantor;
use DB;

class Info3Controller extends Controller
{
    public function index()
    {
    	$kantors = DB::table('kantor')
    			->join('opd', 'kantor.id_opd', '=', 'opd.id_opd')
    			->where('kantor.id_opd', '=', 'O3')
    			->get();
    			return view('info3', ['kantors' => $kantors]);
    }
   /* {
    	$kantors = Kantor::all();
        return view('info1', ['kantors' => $kantors]);
    }*/

}

