
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
					<li><a href="{{ url('/pengurus/fitrah') }}">Zakat Fitrah</a></li>
					<li class="active">Ubah Ketetapan Zakat Fitrah</li>
				</ul>
				<div class="panel panel-custom  col-md-4">
					<div class="panel-heading panel-heading-custom">
						<h2 class="panel-title panel-title-custom"><i class="fa fa-pencil"></i> <i class="fa fa-linux"></i> Ubah Ketetapan</h2>
					</div>

					<div class="panel-body">
						{!! Form::model($ketetapan, ['url' => route('panel.update', $ketetapan->id),
						'method'=>'put', 'class'=>'form-horizontal']) !!}
						<div class="form-group{{ $errors->has('jenis') ? ' has-error' : '' }}">
						     {!! Form::label('jenis', 'Jenis', ['class'=>'col-md-2 control-label']) !!} 
	                         {!! Form::label('jenis', $ketetapan->jenis, ['class'=>'col-md-4 control-label']) !!}
                         </div>

                         <div class="form-group{{ $errors->has('ketetapan') ? ' has-error' : '' }}">
	                         {!! Form::label('ketetapan', 'Ketetapan', ['class'=>'col-md-3 control-label']) !!}
	                         <div class="col-md-4">
		                         {!! Form::text('ketetapan', null, ['class'=>'form-control']) !!}
		                         {!! $errors->first('ketetapan', '<p class="help-block">:message</p>') !!}
	                         </div>
                         </div>
                         <div class="form-group">
	                        <div class="col-md-4 col-md-offset-3">
		                        {{ Form::button('<i class="fa fa-save"></i> Simpan', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm'] )  }}
	                        </div>
                        </div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

