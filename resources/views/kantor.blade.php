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

                {{--<tr style="text-align: center">
                  <td>K01</td>
                  <td>Bagian Hukum</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre1"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr>
                <tr style="text-align: center">
                  <td>K02</td>
                  <td>Bagian Layanan Pengadaan</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre2"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr>
                <tr style="text-align: center">
                  <td>K03</td>
                  <td>Bagian Pemerintahan</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre3"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr>
                <tr style="text-align: center">
                  <td>K04</td>
                  <td>Bagian Organisasi</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre4"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr>
                <tr style="text-align: center">
                  <td>K05</td>
                  <td>Bagian Umum</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre5"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr>
                <tr style="text-align: center">
                  <td>K06</td>
                  <td>Bagian Pembangunan</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre6"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr>
                <tr style="text-align: center">
                  <td>K07</td>
                  <td>Bagian Perekonomian</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre7"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr>
                <tr style="text-align: center">
                  <td>K08</td>
                  <td>Bagian Humas</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre8"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr>
                <tr style="text-align: center">
                  <td>K09</td>
                  <td>Bagian Kerja Sama</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre9"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr><tr style="text-align: center">
                  <td>K10</td>
                  <td>Bagian Kesejahteraan Rakyat</td>
                  <td>
                     <center><a class="btn btn-success" href="sekre10"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
                  </td>
                </tr>--}}

            </table>
        </div>
    </div>
@endsection
