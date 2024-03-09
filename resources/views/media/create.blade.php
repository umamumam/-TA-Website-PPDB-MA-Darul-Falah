@extends('layouts1.app')
@section('contents')


@if(session()->has('message'))
    <p>{{ session()->get('message') }}</p>
@endif

<h1 align="center">Upload Berkas Pendaftaran</h1>
<br>
<div class="card">
    <div style="color: red;">
        <h5 class="card-header">Harap Dibaca Terlebih Dahulu !!!</h5>
    </div>
    <div class="card-body">
        <h5 class="card-title">Setelah Mengisi Form Pendaftaran Yaitu Upload Berkas</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Upload Berkas Dilakukan Satu Per Satu File</li>
            <li class="list-group-item">Pastikan Berkas Yang Di Upload Berformat jpg,jpeg,png,bmp (Untuk Foto Pendaftaran) </li>
            <li class="list-group-item">Berkas Berformat pdf (Untuk  Surat Keterangan Lulus, KK, dan Kartu PIP Jika Punya)</li>
            <li class="list-group-item">Nama Berkas <b>NISN_NAMA PENDAFTAR_NAMA FILE</b> <div style="color: red;"> Contoh:123_SISWA1_Surat Keterangan Lulus </div></li>
            <li class="list-group-item">Setelah Upload Berkas Mengisi Form Untuk Validasi Data, Pastikan Mencantumkan Informasi Yang Benar Untuk Memudahkan Dalam Memberikan Informasi Terkait Pendaftaran</li>
        </ul>
        
    </div>
</div>
<br>

<form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="group">
        <label for="file">Upload Foto Pendaftar</label>
        <input type="file" id="file" name="file">
        @error('file')
            <small class="error">{{ $message }}</small>
        @enderror
    </div>
    <div class="group">
        <button class="save">Upload</button>
    </div>
</form>

<!-- Similar forms for other types of files -->

<table width="100%" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th align="left" width="50%">File Yang Terupload</th>
        </tr>
    </thead>
    <tbody>
        @forelse($medias as $media)
            <tr>
                <td>
                    <div>Nama: {{ $media->name }}</div>
                    <div>File: {{ $media->file }}</div>
                    <div>Ekstensi: {{ $media->extension }}</div>
                    <div>Ukuran: {{ $media->size }}</div>
                    <div>Mime: {{ $media->mime }}</div>
                </td>
            </tr>
        @empty
            <tr>
                <td align="center" colspan="3">Belum ada file</td>
            </tr>
        @endforelse
    </tbody>
</table>
    
@endsection