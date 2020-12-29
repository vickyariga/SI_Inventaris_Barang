@extends('layouts.app')

@section('content')

<body class="">
  <div class="wrapper ">

 <div class="main-panel">
   <div class="content">
    <div class="card-header">
      <h4 class="card-title" style="text-align: center; font-size: 40px;"> Organisasi Perangkat Daerah</h4>
         </div>
        <div class="row">
            @foreach($opd as $data)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-globe text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">{{ $data->nama_opd }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <a class="btn btn-dark" href="{{ route('opd.kantor.index', [$data->id_opd]) }}">Lihat</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


<!--         @forelse($opd as $s)

        <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category"> {{ $s->nama_opd }} </p>
                        <p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <a class="btn btn-dark" href="info5">Lihat</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @empty
        <div>
          Tidak ada data
        </div>
        @endforelse -->
</div>
@endsection
