@extends('layouts.app')

@section('content')

<body class="">
<div class="wrapper ">
    <div class="main-panel">
        <div class="content">
            <input type="button" value="Go Back" onclick="history.back(-1)"/>

            <table class="table table-striped table-dark">
                <thead>
                <tr style="text-align: center">
                    <th>Id Kantor</th>
                    <th>Nama Kantor</th>
                    <th>Aksi</th>
                </tr>
                </thead>

                @foreach($kantors as $kantor)
                    <tr>
                        <td style="text-align: center">{{ $kantor->id_kantor }}</td>
                        <td>{{ $kantor->nama_kantor }}</td>
                        <td>
                            <center><a class="btn btn-success" href="{{ route('opd.kantor.show', [$kantor->id_opd ,$kantor->id_kantor]) }}"><i class="nc-icon nc-alert-circle-i"
                                                                          style="font-size: 20px"></i></a></center>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
