@extends('layouts.app')

@section('content')

<body class="">
  <div class="wrapper ">

<div class="main-panel">
  <div class="content">
  <input type="button" value="Go Back" onclick="history.back(-1)"/>
  <a class="btn btn-primary" style="float: right" href="{{ route('opd.kantor.barang.create', [$idOpd, $idKantor]) }}"> + Tambah</a>
    <table class="table table-striped table-dark">
    <thead class=" text-primary">
    <tr style="text-align: center">
        <th>No</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <!--<th>Alamat</th>-->
        <th>Tanggal</th>
        <th>Aksi</th>
    </tr>
  </thead>
    @foreach($data as $d)
      <?php
        // dd($d);
      ?>
      <tr style="text-align: center">
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->id_barang }}</td>
        <td>{{ $d->nama_barang }}</td>
        <!--<td>{{ $d->alamat }}</td>-->
        <td>{{ $d->tanggal }}</td>
        <td class="btn-group">
            <a class="btn btn-success" href="{{ route('opd.kantor.barang.edit', [$idOpd, $idKantor, $d->id_barang]) }}"><i class="nc-icon nc-ruler-pencil"></i></a>
            <form class="btn-group" method="post" action="{{ route('opd.kantor.barang.destroy', [$idOpd, $idKantor, $d->id_barang]) }}">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit" onclick="return confirm('Yakin Hapus?')"><i class="nc-icon nc-scissors"></i></button>
            </form>
        </td>
      </tr>
    @endforeach
</table>
</div>
</div>
@endsection
