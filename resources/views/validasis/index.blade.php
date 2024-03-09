@extends('layouts1.app')

@section('contents')
<h1 align="center">Data Validasi Pendaftaran Siswa</h1>
@if(isset($keyword))
    <p align="left">Hasil Pencarian Dari {{ $keyword }}</p>
@endif
<a href="{{ url('/validasi/search') }}" class="btn btn-light mx-auto"></a>

<!-- Formulir Pencarian -->
<form action="{{ url('/search') }}" method="GET" class="mb-3">
    <div class="input-group">
        <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan nama...">
        <button type="submit" class="btn btn-primary">Cari</button>
    </div>
</form>

<!-- Notifikasi Jika Data Tidak Ditemukan -->
@if(session('error'))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

<!-- Tampilkan Tabel Hanya Jika Data Ditemukan -->
@if(count($validasis) > 0)
<div class="d-flex justify-content-end gap-3">
    <a href="{{ route('upload') }}" class="btn btn-warning mb-3 mr-3">Upload Kartu Ujian</a>
    <a href="{{ route('validasis.create') }}" class="btn btn-info mb-3">Create</a>
</div>
<style>
        .table td,
        .table th {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2; /* Warna silver untuk baris genap */
        }

        .table tr:nth-child(odd) {
            background-color: white; /* Warna putih untuk baris ganjil */
        }
    </style>
	<div class="table-responsive" style="overflow-x: auto;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>id</th>
                <th>NISN</th>
                <th>Nama Peserta</th>
                <th>Email /Wa</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($validasis as $key => $validasi)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $validasi->id }}</td>
                <td>{{ $validasi->nisn }}</td>
                <td>{{ $validasi->nama_peserta }}</td>
                <td>{{ $validasi->email_wa }}</td>
                <td>{{ $validasi->status }}</td>
                <td>
                    <div class="d-flex gap-2">
                        
                        <a href="{{ route('validasis.edit', [$validasi->id]) }}" class="btn btn-primary">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['validasis.destroy', $validasi->id]]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection
