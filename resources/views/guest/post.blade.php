
@extends('layouts.user')

@section('content')
@include('plugin.paging')
@include('guest.title')
<br>
@if($tampilkan->count() == 0)
<div class="card my-12" style="border-radius: 15px;">
  <h5 class="card-header" style="background: rgb(255,255,255);border-color: rgb(255,255,255);border-radius: 15px;">
    <b>KOSONG</b>
  </h5>
    <div class="card-block">
     <p>Page Not Avalible...!!!</p>
    </div>
</div>
@endif

<div class="card my-12" style="border-radius: 15px;">
  <h5 class="card-header" style="background: rgb(255,255,255);border-color: rgb(255,255,255);border-radius: 15px;">
    <b>{!! $tampilkan->title !!}</b>
  </h5> 
    <div class="card-block">
    <i>Posted By : {!! $writer->name !!}</i>
   <p>
     {!! $tampilkan->content !!}
   </p>
   <footer>
       <div align="right">
          <h8>{!! $tampilkan->created_at !!}</h8>          
       </div>
   </footer>
    </div>
</div>

@endsection