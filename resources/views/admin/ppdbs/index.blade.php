@extends('layouts1.app')

@section('contents')
<br>
admin
<h1 align="center">Data Pendaftaran Siswa Baru</h1>
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
		<tbody>
			@foreach($ppdbs as $ppdb)

				<tr>
					<td>{{ $ppdb->id }}</td>
					<td>{{ $ppdb->nisn }}</td>
					<td>{{ $ppdb->nik_peserta }}</td>
					<td>{{ $ppdb->nm_peserta }}</td>
					<td>{{ $ppdb->jenis_kelamin }}</td>
					<td>{{ $ppdb->tmpt_lahir }}</td>
					<td>{{ \Carbon\Carbon::parse($ppdb->tgl_lahir)->format('d F Y') }}</td>
					<td>{{ $ppdb->anak_ke }}</td>
					<td>{{ $ppdb->no_kk }}</td>
					<td>{{ $ppdb->nik_ayah }}</td>
					<td>{{ $ppdb->nama_ayah }}</td>
					<td>{{ $ppdb->pend_ayah }}</td>
					<td>{{ $ppdb->pek_ayah }}</td>
					<td>{{ $ppdb->nik_ibu }}</td>
					<td>{{ $ppdb->nama_ibu }}</td>
					<td>{{ $ppdb->pend_ibu }}</td>
					<td>{{ $ppdb->pek_ibu }}</td>
					<td>{{ $ppdb->telp_peserta }}</td>
					<td>{{ $ppdb->telp_ortu }}</td>
					<td>{{ $ppdb->alamat_peserta }}</td>
					<td>{{ $ppdb->kode_pos }}</td>
					<td>{{ $ppdb->asal_sekolah }}</td>
					<td>{{ $ppdb->npsn }}</td>
					<td>{{ $ppdb->nsm }}</td>
					<td>{{ $ppdb->alamat_sekolah }}</td>
					<td>{{ $ppdb->kriteria_peserta }}</td>
					<td>{{ $ppdb->peminatan }}</td>
					<td>{{ $ppdb->no_kip }}</td>
					<td>{{ $ppdb->no_kks }}</td>
					<td>{{ $ppdb->no_pkh }}</td>
					<td>{{ \Carbon\Carbon::parse($ppdb->tgl_daftar)->format('d F Y') }}</td>

					<td>
						<div class="d-flex gap-2">
                            <a href="{{ route('ppdbs.show', [$ppdb->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('ppdbs.edit', [$ppdb->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['ppdbs.destroy', $ppdb->id]]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
					</td>
				</tr>

			@endforeach
		</tbody>
	</table>
</div>

	@endsection
