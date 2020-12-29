<?php

namespace App\Http\Controllers;

use App\Charts\SampleChart;
use Illuminate\Http\Request;
use App\Barang;
use DB;
use Charts;

class GrafikController extends Controller
{
     public function index()
    {
    	$barang = Barang::all();
    	$chart = Charts::DB($barang, 'bar', 'highcharts')
    			->title('barang')
    			->elementlabel('total barang')
    			->dimensions(1000, 500)
    			->colors(['red'])
    			->groupByMonth(date('Y'), true);
        return view('grafik', ['chart' => $chart]);
    }
}
