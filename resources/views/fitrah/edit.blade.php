
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li><a href="{{ url('/pengurus/fitrah') }}">Zakat Fitrah</a></li>
					<li class="active">Ubah Data Zakat Fitrah</li>
				</ul>
				<div class="panel panel-custom">
					<div class="panel-heading panel-heading-custom">
						<h2 class="panel-title panel-title-custom"><i class="fa fa-pencil"></i> <i class="fa fa-users"></i> Ubah Data Zakat Fitrah</h2>
					</div>

					<div class="panel-body">
						{!! Form::model($fitrah, ['url' => route('fitrah.update', $fitrah->id),
						'method'=>'put', 'class'=>'form-horizontal']) !!}
						@include('fitrah._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
