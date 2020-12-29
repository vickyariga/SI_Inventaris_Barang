<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class KantorBarangController extends Controller
{
    public function create($idOpd, $idKantor){
        $cari = Barang::max('id_barang');

        $kode=substr($cari,1,4);
        $tambah=$kode+1;

        if($tambah<10){
            $id_barang="B000".$tambah;
        }else{
            $id_barang="B00".$tambah;
        }

        return view('create', compact('idKantor', 'id_barang', 'idOpd'));
    }

    public function store(Request $request, $idOpd, $idKantor)
    {
        $tanggal=date("Y-m-d");

        $barang = new Barang();

        $barang->id_barang = $request->id_barang;
        $barang->id_kantor = $idKantor;
        $barang->nama_barang = $request->nama_barang;
        $barang->tanggal = $tanggal;

        $barang->save();

        // alihkan halaman ke halaman Kantor
        return redirect()->route('opd.kantor.show', [$idOpd, $idKantor])->with('Sukses','Data Berhasil Ditambahkan');
    }

    public function edit($idOpd, $idKantor, $id_barang)
    {
        $barang = Barang::find($id_barang);

        return view('edit', compact('idOpd', 'idKantor', 'barang'));
    }

    public function update(Request $request, $idOpd, $idKantor)
    {
        $barang = Barang::find($request->id_barang);

        $barang->nama_barang = $request->nama_barang;

        $barang->save();

        return redirect()->route('opd.kantor.show', [$idOpd, $idKantor])->with('Sukses', 'Data Berhasil diupdate');
    }

    public function destroy($idOpd, $idKantor, $id_barang)
    {
        $barang = Barang::find($id_barang);

        $barang->delete();

        return redirect()->route('opd.kantor.show', [$idOpd, $idKantor])->with('Sukses', 'Data Berhasil dihapus');
    }

}
