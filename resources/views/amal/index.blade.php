@extends('layouts.app')

@section('create')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{url('/home')}}">Dashboard</a></li>
				<li class="active">Infaq dan Sodaqoh</li>
			</ul>
				<div class="panel panel-custom">
					<div class="panel-heading panel-heading-custom">
						<h2 class="panel-title panel-title-custom"><i class="fa fa-users"></i> Info Data Infaq dan Sodaqoh</h2>
					</div>
					<div class="panel-body">
					<b>Total Perhitungan Infaq :</b></br>
					Jumlah orang yang ber-Infaq : {{$ji}}</br>
					Jumlah Perolehan Infaq : Rp. {{$hi}}</br>
					<b>Total Perhitungan Sodakoh :</b></br>
					Jumlah orang yang ber-Sodakoh : {{$js}}</br>
					Jumlah Perolehan Sodakoh : Rp. {{$hs}}</br>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-custom">
					<div class="panel-heading panel-heading-custom">
						<h2 class="panel-title panel-title-custom"><i class="fa fa-plus-circle"></i> <i class="fa fa-users"></i> Tambah Data Infaq dan Sodaqoh</h2>
					</div>

					<div class="panel-body">
						{!! Form::open(['url' => route('amal.store'),
						'method' => 'post', 'class'=>'form-horizontal']) !!}
						@include('amal._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-custom">
				<div class="panel-heading panel-heading-custom">
					<h2 class="panel-title panel-title-custom"><i class="fa fa-users"></i> Data Infaq dan Sodaqoh</h2>
				</div>
				<div class="panel-body">
	              {!! $html->table(['class'=>'table-striped'])!!}
	              

				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection



