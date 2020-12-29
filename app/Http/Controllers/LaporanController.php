<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\Kantor;

class LaporanController extends Controller
{
       public function index()
    {
    	$laporan = Laporan::join('kantor', 'laporan.id_kantor', '=', 'kantor.id_kantor')
    			->get();
        return view('laporan', ['laporan' => $laporan]);
    }
}
