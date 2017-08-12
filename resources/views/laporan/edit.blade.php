@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li><a href="{{ url('/pengurus/laporan') }}">Buletin Laporan</a></li>
					<li class="active">Ubah Data Zakat Fitrah</li>
				</ul>
				<div class="panel panel-custom">
					<div class="panel-heading panel-heading-custom">
						<h2 class="panel-title panel-title-custom"><i class="fa fa-pencil"></i> <i class="fa fa-info"></i> Edit Buletin Laporan</h2>
					</div>
					<div class="panel-body">
						{!! Form::model($laporan,['url' => route('laporan.update', $laporan->id),
						'method' => 'put', 'class'=>'form-horizontal']) !!}
						@include('laporan._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection