{!! Form::model($model,['url'=>$form_url,'method'=>'delete','class'=>'delete'] )!!}
<a class="btn btn-xs btn-primary" href="{{$edit_url}}" ><i class="fa fa-btn fa-pencil"></i> Ubah</a> |
 {{ csrf_field() }}
 {!! Form::button('<i class="fa fa-trash"></i> Hapus',['type'=>'submit', 'class'=>'btn btn-xs','id'=>'delete-btn'])!!}
{!! Form::close()!!}

