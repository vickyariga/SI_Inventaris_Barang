<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Kantor;
use App\Barang_Kantor;
use DB;

class Sekre9Controller extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
    	$data = DB::table('barang')
    		  ->join('kantor', 'barang.id_kantor', '=', 'kantor.id_kantor')
    		  ->where('barang.id_kantor', '=', 'K09')
    		  ->get();
    		  return view('sekre9', ['data' => $data]);
    }

    /*{
    	$data = DB::table('barang_kantor')
    			->join('barang', 'barang_kantor.id_barang', '=', 'barang.id_barang')
    			->join('kantor', 'barang_kantor.id_kantor', '=', 'kantor.id_kantor')
    			->where('barang_kantor.id_kantor', '=', 'K001')
    			->get();
    		return view('sekre1', ['data' => $data]);
    }
    {
    	$data = Barang::join('barang_kantor', 'barang.id_barang', '=', 'barang_kantor.id_barang')
    			->join('kantor', 'barang_kantor.id_kantor', '=', 'kantor.id_kantor')
    			->get();
        return view('sekre1', ['data' => $data]);
    }*/

    public function create()
	{
		$conn=mysqli_connect('localhost','root','', 'baru');
		
		$cari_kd=mysqli_query($conn,'select max(id_barang) as kode from barang');
		$tm_cari=mysqli_fetch_array($cari_kd);
		$kode=substr($tm_cari['kode'],1,4);
		$tambah=$kode+1;
		if($tambah<10){
			$id_barang="B000".$tambah;
		}else{
			$id_barang="B00".$tambah;
		}
		/*$barangs = Barang::all();
		return view('tambah1', ['barangs' => $barangs]); 
		 $kantors = Kantor::all();*/
		// memanggil view tambah
		 $kantors = DB::table('kantor')
		 		 ->where('id_kantor', '=', 'K09')
		 		 ->get();
		return view('tambah9', ['kantors' => $kantors , 'id_barang' => $id_barang]); 
	}

	 public function store9(Request $request)
	{


		// insert data ke table
		$tanggal=date("Y-m-d");
	    DB::table('barang')->insert([
	    'id_barang' => $request->id_barang,
	    'id_kantor' => 'K09',
	    'nama_barang' => $request->nama_barang,
	    'tanggal' => $tanggal
	]);
	     /*DB::table('barang_kantor')->insert([
	   'id_barang' => $request->id_barang,
	   'id_kantor' => $request->kantor
	]);*/
	    
	// alihkan halaman ke halaman sekre1
	return redirect('/sekre9');


		/* \App\Barang::create($request->all());
		return redirect()->route('sekre1.index')->with('Sukses','Data Berhasil Ditambahkan'); */
	}

			// method untuk edit data pegawai
		/*public function edit($id)
		{
			// mengambil data pegawai berdasarkan id yang dipilih
			$barang = DB::table('barang')->where('id_barang',$id_barang)->get();
			// passing data pegawai yang didapat ke view edit.blade.php
			return view('sekre1',['barang' => $barang]);

		}*/
}