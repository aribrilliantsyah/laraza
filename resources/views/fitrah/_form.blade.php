<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
	{!! Form::label('nama', 'Nama', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
	{!! Form::label('alamat', 'Alamat', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::textarea('alamat', null, ['class'=>'form-control','size' => '5x2']) !!}
		{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('jk') ? ' has-error' : '' }}">
	{!! Form::label('jk', 'Jenis Kelamin', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::radio('jk', 'Laki-Laki',true) !!} Laki-Laki</br>
		{!! Form::radio('jk', 'Perempuan') !!} Perempuan
		{!! $errors->first('jk', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('zakat') ? ' has-error' : '' }}">
	{!! Form::label('zakat', 'Jenis zakat', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::radio('zakat', 'Beras', true) !!} Beras</br>
		{!! Form::radio('zakat', 'Uang') !!} Uang
		{!! $errors->first('zakat', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		
		{{ Form::button('<i class="fa fa-save"></i> Simpan', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm'] )  }}
	</div>
</div>