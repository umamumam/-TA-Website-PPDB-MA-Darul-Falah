@extends('layouts1.app')

@section('contents')
<h1 align="center">Data Validasi Pendaftaran Siswa</h1>
@if(isset($keyword))
    <p align="left">Hasil Pencarian Dari {{ $keyword }}</p>
@endif
<a href="{{ url('/validasi/search') }}" class="btn btn-light mx-auto"></a>

<!-- Formulir Pencarian -->
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
<h5>Silakan Cari Sesuai Nama Untuk Mengecek Jika Statusnya Sudah Tervalidasi</h5>
<h5> Kemudian Download dan Cetak Kartu Ujiannya Atau bisa melakukan cetak kartu di madrasah dengan membawa pas foto 3x4</h5>

<div class="d-flex justify-content-end gap-2">
    @php
        $isAdmin = auth()->user()->isAdmin(); // Menggantikan ini dengan logika yang sesuai untuk menentukan jika pengguna adalah admin
    @endphp

    @if ($isAdmin)
        <a href="{{ route('upload') }}" class="btn btn-success">Cetak Kartu Ujian</a>
    @else
        <a href="{{ url('/upl') }}" class="btn btn-success">Cetak Kartu Ujian</a>
    @endif
</div>

                    <br>
	<div class="table-responsive" style="overflow-x: auto;">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>id</th>
                <th>NISN</th>
                <th>Nama Peserta</th>
                <!-- Kolom "email_wa" dihapus dari tampilan -->
                <th>status</th>
                
            </tr>
        </thead>
        <tbody>
        @foreach($validasis as $key => $validasi)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $validasi->id }}</td>
                <td>{{ $validasi->nisn }}</td>
                <td>{{ $validasi->nama_peserta }}</td>
                <!-- Kolom "email_wa" dihapus dari tampilan -->
                <td>{{ $validasi->status }}</td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection
