
@extends('default')

@section('content')
<br>
<h2 align="center">Edit Data Layanan Pengaduan Masyarakat Desa Bulusari</h2>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($pengaduanma, array('route' => array('pengaduanmas.update', $pengaduanma->id), 'method' => 'PUT')) }}

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
			{{ Form::date('tanggal', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('alamat', 'Alamat', ['class'=>'form-label']) }}
			{{ Form::text('alamat', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('laporan', 'Laporan', ['class'=>'form-label']) }}
			{{ Form::textarea('laporan', null, array('class' => 'form-control')) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	<br>
@stop
