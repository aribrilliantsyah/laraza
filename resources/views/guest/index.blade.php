@extends('layouts.user')


@section('content')
@include('plugin.paging')
@include('guest.title')
<br>
@if($html->count() == 0)
<div class="card my-12" style="border-radius: 15px;">
  <h5 class="card-header" style="background: rgb(255,255,255);border-color: rgb(255,255,255);border-radius: 15px;">
    <b>KOSONG</b>
  </h5>
    <div class="card-block">
     <p>Page Not Avalible...!!!</p>
    </div>
</div>
@endif
@foreach($html as $data)
<div class="card my-12" style="border-radius: 15px;">
  <h5 class="card-header" style="background: rgb(255,255,255);border-color: rgb(255,255,255);border-radius: 15px;">
    <b>{{$data->title}}</b>
  </h5>
    <div class="card-block">

       </br>
       {!! $data->content !!}
         <footer>
           <div align="right">
             <a class="btn btn-xs btn-primary" href="{{route('show.more', $data->slug)}}">Baca Lagi</a>              
           </div>
         </footer>
   
    </div>
</div>
<br>
@endforeach
<div class="card my-12" style="border-radius: 15px;">
<div align="center">{!! $html->render() !!}</div>
    
</div>
@endsection