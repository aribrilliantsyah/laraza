@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-custom">
					<div class="panel-heading panel-heading-custom">
						<h2 class="panel-title panel-title-custom"><i class="fa fa-pencil"></i> <i class="fa fa-users"></i> Edit Data Zakat Mal</h2>
					</div>

					<div class="panel-body">
						{!! Form::open(['url' => route('mal.store'),
						'method' => 'put', 'class'=>'form-horizontal']) !!}
						@include('mal._form')
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection