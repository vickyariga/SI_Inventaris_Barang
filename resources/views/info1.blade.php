@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    KOMINFO
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="style.css">
  
<title>Kominfo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="dark" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          ADMIN
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="home">
              <i class="nc-icon nc-bank"></i>
              <p>DASHBOARD</p>
            </a>
          </li>
          <li class="active">
            <a href="opd">
              <i class="nc-icon nc-tile-56"></i>
              <p>OPD</p>
            </a>
          </li>
           <li>
          <!--  <a href="user">
              <i class="nc-icon nc-single-02"></i>
              <p>Users</p>
            </a>
          </li>
          <li>
            <a href="laporan">
              <i class="nc-icon nc-bell-55"></i>
              <p>LAPORAN</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>

    <div class="main-panel">
  <div class="content">
  <input type="button" value="Go Back" onclick="history.back(-1)"/>
  
    <table class="table table-striped table-dark">
    <thead >
    <tr style="text-align: center">
        <th>Id Kantor</th>
        <th>Nama Kantor</th>
        <th>Aksi</th>
    </tr>
  </thead>
   <!-- @foreach($kantors as $d)
      <?php 
        // dd($d);
      ?>
      <tr>
        <td style="text-align: center">{{ $d->id_kantor }}</td>
        <td>{{ $d->nama_kantor }}</td>
        <td>
           <center><a class="btn btn-success" href="sekre1"><i class="nc-icon nc-alert-circle-i" style="font-size: 20px"></i></a></center>
        </td>
      </tr>
    @endforeach -->

        <tr style="text-align: center">
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
        </tr>

</table>
</div>
</div>
     @endsection