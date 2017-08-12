<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
	{!! Form::label('title', 'Title', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('title', null, ['class'=>'form-control']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
	{!! Form::label('content', 'Content', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::textarea('content', null, ['class'=>'form-control']) !!}
		{!! $errors->first('content', '<p class="help-block">:message</p>') !!}
	</div>
</div>


<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		
		{{ Form::button('<i class="fa fa-save"></i> Simpan', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm'] )  }}
	</div>
</div>