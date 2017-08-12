@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-custom">
                <div class="panel-heading panel-heading-custom"><i class="fa fa-desktop"></i> Dashboard</div>
                <div class="panel-body">
                    <center>
                    Silahkan pilih menu yang diinginkan :
                    <br>
                    <a class="btn btn-xs" href="{{route('fitrah.index')}}" style="background: rgba(0,0,0,0.5);"><h3><i class="fa fa-balance-scale"></i></h3>Zakat Fitrah</a>
                    <a class="btn btn-xs" href="{{route('amal.index')}}" style="background: rgba(0,0,0,0.5);"><h3><i class="fa fa-bank"></i></h3>Infaq dan Sodaqoh</a>
                    <a class="btn btn-xs" href="{{route('mal.index')}}" style="background: rgba(0,0,0,0.5);"><h3><i class="fa fa-balance-scale"></i></h3>Zakat Mal</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
