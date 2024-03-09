
@extends('default')

@section('content')
<br>
<h2 align="center">Input Data Layanan Pengaduan Masyarakat Desa Bulusari</h2>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'pengaduanmas.store']) !!}

		<div class="mb-3">
			{{ Form::label('nama', 'Nama', ['class'=>'form-label']) }}
			{{ Form::text('nama', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('wa', 'Wa', ['class'=>'form-label']) }}
			{{ Form::text('wa', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tanggal', 'Tanggal', ['class'=>'form-label']) }}
			{{ Form::date('tanggal', null, array('class' => 'form-control', 'format' => 'd-m-Y')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('alamat', 'Alamat', ['class'=>'form-label']) }}
			{{ Form::text('alamat', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('laporan', 'Laporan', ['class'=>'form-label']) }}
			{{ Form::textarea('laporan', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
<br>

@stop