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
           <li >
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

        <div class="container">
          <h1>hahahaha</h1>
          <br>
          {!! $chart->html() !!}
        </div>

        {!! Charts::scripts() !!}
        {!! $chart->scripts() !!}

         <!-- <div id="container" style="width: 960px; height: 450px; margin: 0 auto"></div>
          
          <script language="JavaScript">
                    Highcharts.chart('container', {
              chart: {
                  type: 'column'
              },
              title: {
                  text: 'Sekretariat Daerah & DPRD'
              },
              subtitle: {
                  text: ''
              },
              xAxis: {
                  categories: [
                      'router',
                      'access point',
                     
                  ],
                  crosshair: true
              },
              yAxis: {
                  min: 0,
                  title: {
                      text: 'Tahun'
                  }
              },
              tooltip: {
                  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                  pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                  footerFormat: '</table>',
                  shared: true,
                  useHTML: true
              },
              plotOptions: {
                  column: {
                      pointPadding: 0.2,
                      borderWidth: 0
                  }
              },
              series: [{
                  name: 'Bagian Hukum',
                  data: [49.9, 71.5]

              }, {
                  name: 'Bagian Layanan Pengadaan',
                  data: [83.6, 78.8]

              }, {
                  name: 'Bagian Pemerintahan',
                  data: [48.9, 38.8]

              }, {
                  name: 'Bagian Organisasi',
                  data: [42.4, 33.2]

              }]
          });
          </script>

      </div> -->
  </div>
</body>
        
 @endsection  