@extends('layouts.app')

@section('create')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{url('/home')}}">Dashboard</a></li>
				<li class="active">Zakat Mal</li>
			</ul>
				<div class="panel panel-custom">
					<div class="panel-heading panel-heading-custom">
						<h2 class="panel-title panel-title-custom"><i class="fa fa-users"></i>Info Zakat Mal</h2>
						<div class="panel-body">
							Belum tau harus berzakat mal ? Silahkan pastikan nominal harta yang harus di zakat kan <a href="{{url('/kalku')}}"><i>disini</i></a></br>
							<b>Total perhitungan Zakat mal :</b></br>
							Jumlah muzaki (zakat mal) : {{$jum}}</br>
							Jumlah perolehan : Rp. {{$dek}}
						</div>
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
						<h2 class="panel-title panel-title-custom"><i class="fa fa-plus-circle"></i> <i class="fa fa-users"></i> Tambah Data Zakat Mal</h2>
					</div>

					<div class="panel-body">
						{!! Form::open(['url' => route('mal.store'),
						'method' => 'post', 'class'=>'form-horizontal']) !!}
						@include('mal._form')
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
					<h2 class="panel-title panel-title-custom"><i class="fa fa-users"></i> Data Zakat Mal</h2>
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



