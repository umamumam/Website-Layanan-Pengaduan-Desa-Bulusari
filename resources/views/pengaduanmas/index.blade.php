<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Website Desa Bulusari</title>
  <style>
    .logo {
  display: flex;
  align-items: center;
}

.logo img {
  margin-right: 10px;
   /* Sesuaikan margin sesuai kebutuhan */
}

.logo div {
  display: flex;
  flex-direction: column;
}
  </style>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
      
      <img src="assets/img/LogoD.png" alt="" style="margin-right: 10px;" />
  <div>
    <br>
    <h3>Desa Bulusari</h3>
    <h6 style="margin-left: 20px;">Kabupaten Demak</h6>
    <br>
  </div>
</a>
      
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="http://127.0.0.1:8000/">Home</a></li>
          <li class="dropdown"><a href="http://127.0.0.1:8000/"><span>Profil Desa</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/">Tentang Kami</a></li>
              <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/">Visi Misi</a></li>
              <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/">Sejarah Desa</a></li>
             
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/">Pemerintahan</a></li>
          <li><a class="nav-link scrollto " href="http://127.0.0.1:8000/">Potensi Desa</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/pengaduanmas">Layanan</a></li>
          <li><a class="nav-link scrollto" href="http://127.0.0.1:8000/">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
  <section id="hero">

@extends('default')

@section('content')
<h2 align="center">Layanan Pengaduan Masyarakat Desa Bulusari</h2>
<a href="https://drive.google.com/file/d/1WLQ6ZjPx06s2P0jPwSz_s67SfcP4U7HY/view?usp=sharing" class="btn btn-primary" target="_blank">File Pengaduan</a>

	<div class="d-flex justify-content-end mb-3"><a href="{{ route('pengaduanmas.create') }}" class="btn btn-info">Input</a></div>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama Pelapor</th>
				<th>No. WA</th>
				<th>Tanggal</th>
				<th>Alamat</th>
				<th>Laporan Pengaduan</th>

				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pengaduanmas as $pengaduanma)

				<tr>
					<td>{{ $pengaduanma->id }}</td>
					<td>{{ $pengaduanma->nama }}</td>
					<td>{{ $pengaduanma->wa }}</td>
					<td>{{ \Carbon\Carbon::parse($pengaduanma->tanggal)->format('d F Y') }}</td>
					<td>{{ $pengaduanma->alamat }}</td>
					<td>{{ $pengaduanma->laporan }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('pengaduanmas.show', [$pengaduanma->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('pengaduanmas.edit', [$pengaduanma->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['pengaduanmas.destroy', $pengaduanma->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>

@stop
