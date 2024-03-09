@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Dashboard User</h1>
<br>
	<div class="d-flex justify-content-end mb-3"><a href="{{ route('ppdbs.create') }}" class="btn btn-info">Create</a></div>
	<div style="text-align: center; margin-bottom: 20px">
		<a class="btn btn-primary" href="/export-pdf">Export PDF</a>
		<a class="btn btn-success" href="/ppdbs-export">Export Excel</a>
		
	</div>
	<div class="table-responsive" style="overflow-x: auto;">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>id</th>
				<th>NISN</th>
				<th>NIK Peserta</th>
				<th>Nama Peserta</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Anak ke</th>
				<th>No KK</th>
				<th>NIK Ayah</th>
				<th>Nama Ayah</th>
				<th>Pendidikan Ayah</th>
				<th>Pekerjaan Ayah</th>
				<th>NIK Ibu</th>
				<th>Nama Ibu</th>
				<th>Pendidikan Ibu</th>
				<th>Pekerjaan Ibu</th>
				<th>Telpon Peserta</th>
				<th>Telpon Ortu</th>
				<th>Alamat Peserta</th>
				<th>Kode Pos</th>
				<th>Asal Sekolah</th>
				<th>NPSM</th>
				<th>NSM</th>
				<th>Alamat Sekolah</th>
				<th>Kriteria Peserta</th>
				<th>Peminatan</th>
				<th>NO KIP</th>
				<th>NO KKS</th>
				<th>NO PKH</th>
				<th>Tanggal Daftar</th>

				<th>Action</th>
			</tr>
		</thead>
		
	</table>
</div>

	@endsection
