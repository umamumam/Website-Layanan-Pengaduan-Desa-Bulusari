<br>
<br>
<br>
@extends('default')

@section('content')
<h2 align="center">Detail Data Layanan Pengaduan Masyarakat Desa Bulusari</h2>
<br>
<div class="text-right">
    <a href="{{ route('pengaduanmas.index') }}" class="btn btn-warning">Kembali</a>
</div>
<p></p>
<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama Pengadu</th>
				<th>No. WA</th>
				<th>Tanggal</th>
				<th>Alamat</th>
				<th>Laporan Pengaduan</th>

				
			</tr>
		</thead>
		<tbody>
			

				<tr>
					<td>{{ $pengaduanma->id }}</td>
					<td>{{ $pengaduanma->nama }}</td>
					<td>{{ $pengaduanma->wa }}</td>
					<td>{{ \Carbon\Carbon::parse($pengaduanma->tanggal)->format('d F Y') }}</td>
					<td>{{ $pengaduanma->alamat }}</td>
					<td>{{ $pengaduanma->laporan }}</td>
	
	</tr>


</tbody>
</table>
@stop