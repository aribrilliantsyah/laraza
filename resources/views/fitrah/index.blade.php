@extends('layouts.app')

@section('create')
<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{url('/home')}}">Dashboard</a></li>
				<li class="active">Zakat Fitrah</li>
			</ul>
				<div class="panel panel-custom">
					<div class="panel-heading panel-heading-custom">
						<h2 class="panel-title panel-title-custom"><i class="fa fa-users"></i> Info Data Zakat Fitrah</h2>
					</div>
					<div class="panel-body">
					<!--Panel Ketetapan-->
			<div class="container">
			<div class="panel panel-custom col-md-5">
				<div class="panel-heading panel-heading-custom">
					<h2 class="panel-title panel-title-custom"><i class="fa fa-linux"></i> Ketetapan</h2>
				</div>
				<div class="panel-body">
				<table class="table" style="background: rgba(255,255,255,0.3);border-radius: 15px">
	              	<tr>
	              		<td>Jenis </td>
	              		<td>Ketetapan </td>
	              		<td>Opsi </td>
	              	</tr>
	              	
	              @foreach($ketetapan as $data)
	              	<tr>
	              		<td>{{$data->jenis}}</td>
	              		<td>
	              		@if($data->jenis=='Uang')
	              		Rp.{{$d}}
	              	    
	              		@endif
	              		@if($data->jenis=='Beras')
	              		{{$e}}
	              	    
	              		@endif
	              		</td>
	              		
	              		<td><a class="btn btn-xs btn-primary" href="{{route('panel.edit',$data->id)}}" ><i class="fa fa-btn fa-pencil"></i> Ubah</a></td>
	              	</tr>
	              @endforeach
	              </table>
				</div>
			</div>
			<!--Panel Ketetapan-->
			<div class="col-md-1"></div>
			<!--Panel Info-->
			<div class="panel panel-custom col-md-5">
				<div class="panel-heading panel-heading-custom">
					<h2 class="panel-title panel-title-custom"><i class="fa fa-linux"></i> Hasil Perhitungan</h2>
				</div>
				<div class="panel-body" id="copyTarget">
				<table class="table" style="background: rgba(255,255,255,0.5);border-radius: 15px">
	              	<tr>
	              		<td>Total Muzaki Beras</td>
	              		<td>{{$beras}}</td>
	              	</tr>
	              	<tr>
	              		<td>Jumlah Perolehan Beras</td>
	              		<td>{{$hasilb}} Kg</td>
	              	</tr>
	              	<tr>
	              		<td>Total Muzaki Uang</td>
	              		<td>{{$uang}}</td>
	              	</tr>
	              	<tr>	              
	              		<td>Jumlah Perolehan Uang</td>
	              		<td>Rp.{{$c}}</td>              	
	              	</tr>
	              	
	              </table>
	              <button id="copyButton">Copy</button>
				</div>
			</div>
			</div>
	        <!--Panel info-->
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
						<h2 class="panel-title panel-title-custom"><i class="fa fa-plus-circle"></i> <i class="fa fa-users"></i> Tambah Data Zakat Fitrah</h2>
					</div>

					<div class="panel-body">
						{!! Form::open(['url' => route('fitrah.store'),
						'method' => 'post', 'class'=>'form-horizontal']) !!}
						@include('fitrah._form')
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
					<h2 class="panel-title panel-title-custom"><i class="fa fa-users"></i> Data Zakat Fitrah</h2>
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



