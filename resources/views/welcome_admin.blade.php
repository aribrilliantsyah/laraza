@extends('layouts.app')


@section('content')
@include('layouts._slide')
<br>
<div>
    <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-custom">
                  <div class="panel-heading panel-heading-custom">Assalamu'alaikum Wr Wb </div>
                  <div class="panel-body">
                      Selamat Datang Di Aplikasi Pendataan Zakat, Infaq dan Sodaqoh
                      <hr>
                      <p>
                      Belum tau apa itu zakat, infaq dan sodaqoh?<a href="{{url('/info')}}"><i> Boleh baca disini</i></a>
                      </p>
                  </div>
                  </div>
                </div>
          </div> 
        </div>
    </div>
</div>
@if(Auth::user() == false)
@include('auth.login2')
@endif
@endsection