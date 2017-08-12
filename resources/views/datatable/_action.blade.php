{!! Form::model($model,['url'=>$form_url,'method'=>'delete','class'=>'delete'] )!!}
 {{ csrf_field() }}
 {!! Form::button('<i class="fa fa-trash"></i> Hapus',['type'=>'submit', 'class'=>'btn btn-xs','id'=>'delete-btn'])!!}
{!! Form::close()!!}

