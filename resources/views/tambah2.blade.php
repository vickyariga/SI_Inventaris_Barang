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
            <a href="user">
              <i class="nc-icon nc-single-02"></i>
              <p>Users</p>
            </a>
          </li>
          <li>
            <a href="laporan">
              <i class="nc-icon nc-bell-55"></i>
              <p>LAPORAN</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

<div class="main-panel">

<form action="{{route('store2')}}" method="post">
		{{ csrf_field() }}

		<div class="form-group">
		<label>Kode Barang</label>	
		<input class="form-control" type="text" name="id_barang" value="<?php echo $id_barang;  ?>" required="required">
	    </div>

	    <div class="form-group">
		<label>Nama Barang</label>
		<input class="form-control" type="text" name="nama_barang" required="required">
	    </div>

	  <!-- <div class="form-group">
		<label>Kantor</label>
		<select name="kantor" class="form-control">
	    @foreach($kantors as $kantor)
	    <option value="{{ $kantor->id_kantor }}">{{ $kantor->nama_kantor }}</option>
	    @endforeach
  		</select>
		</div> -->

		<button  type="submit" class="btn btn-primary" value="Simpan Data">Simpan</button>
    
</form>
</div>
 @endsection