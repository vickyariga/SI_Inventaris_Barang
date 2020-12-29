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
          <li>
            <a href="opd">
              <i class="nc-icon nc-tile-56"></i>
              <p>OPD</p>
            </a>
          </li>
           <li>
            <a href="user">
              <i class="nc-icon nc-single-02"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="active">
            <a href="laporan">
              <i class="nc-icon nc-bell-55"></i>
              <p>LAPORAN</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

  
  <div class="main-panel">
  <div class="content">
    <h3 style="font-size: 30px; text-align: center;">Laporan Masuk</h3>
    <table class=" table-striped table-secondary" style="float: left; width: 100%;">
          
            <tr class=" text-dark" style="text-align: center">
              <th>Nama Instansi</th>
              <th>Aksi</th>
            </tr>
          @foreach($laporan as $d)
            <?php 
              // dd($d);
            ?>
            <tr>
              <td>{{ $d->nama_kantor }}</td>
              <td>
                 <center><a class="btn btn-danger" href="#"><i class="nc-icon nc-email-85" style="font-size: 20px"></i></a></center>
              </td>
            </tr>
          @endforeach
          </table>

         <!-- <table class="table-striped table-secondary" style="float: right; width: 500px;">
          <thead class="text-danger">
              <th>Laporan Selesai</th>
            </thead>
          <tr class=" text-dark" style="text-align: center">
              <th>Nama Instansi</th>
              <th>Aksi</th>
          </tr>
          @foreach($laporan as $d)
            <?php 
              // dd($d);
            ?>
            <tr>
              <td>{{ $d->nama_kantor }}</td>
              <td>
                 <center><a class="btn btn-danger" href="#"><i class="nc-icon nc-email-85" style="font-size: 20px"></i></a></center>
              </td>
            </tr>
          @endforeach
          </table> -->  

</div>
</div>

    @endsection