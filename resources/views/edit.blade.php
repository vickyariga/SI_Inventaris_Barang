@extends('layouts.app')

@section('content')

<body class="">
  <div class="wrapper ">

    <div class="main-panel">


                <form action="{{ route('opd.kantor.barang.update', [$idOpd, $idKantor, $barang->id_barang]) }}" method="post">
                    @method('PUT')
                  @csrf
                  <div class="form-group">
                  <label>Kode Barang</label>
                  <input class="form-control" type="text" name="id_barang" value="{{ $barang->id_barang }}" readonly="readonly">
                  </div>

                  <div class="form-group">
                  <label>Nama Barang</label>
                  <input class="form-control" type="text" name="nama_barang" value="{{ $barang->nama_barang }}" required="required">
                  </div>

                  <button  type="submit" class="btn btn-primary" value="Simpan Data">Simpan</button>
                </form>

    </div>

     @endsection
