@extends('layouts.app')

@section('create')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-custom">
					<div class="panel-heading panel-heading-custom">
						<h2 class="panel-title panel-title-custom"><i class="fa fa-plus-circle"></i> <i class="fa fa-info"></i> Tambah Buletin Laporan</h2>
					</div>

					<div class="panel-body">
						{!! Form::open(['url' => route('laporan.store'),
						'method' => 'post', 'class'=>'form-horizontal']) !!}
						@include('laporan._form')
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
					<h2 class="panel-title panel-title-custom"><i class="fa fa-info"></i> Buletin Laporan </h2>
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



