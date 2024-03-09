@extends('layouts1.app')

@section('contents')
<h1 align="center">Data Nilai Raport Siswa Baru</h1>
    <br>
	<div class="table-responsive" style="overflow-x: auto; margin-top: -10px;">
    <table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.8);">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ $nilai->id }}</td>
            </tr>
            <tr>
                <th>NISN</th>
                <td>{{ $nilai->nisn }}</td>
            </tr>
            <tr>
                <th>Nama Peserta</th>
                <td>{{ $nilai->nama_peserta }}</td>
            </tr>
            <!-- tambahkan baris untuk data siswa lainnya di sini -->
        </tbody>
    </table>
</div>
<br>
<h2 align="center">Daftar Nilai Siswa</h2>
<br>
<div class="table-responsive" style="overflow-x: auto; margin-top: -10px;">
    <table class="table table-bordered">
        <tbody>
            <tr>
				<th>Akidah</th>
                <td>{{ $nilai->akidah }}</td>
            </tr>
            <tr>
				<th>Hadis</th>
                <td>{{ $nilai->hadis }}</td>
            </tr>
            <tr>
				<th>Fikih</th>
                <td>{{ $nilai->fikih }}</td>
            </tr>
				<th>Bahasa Arab</th>
                <td>{{ $nilai->bhs_arab }}</td>
            </tr>
				<th>Bahasa Inggris</th>
                <td>{{ $nilai->bhs_inggris }}</td>
            </tr>
				<th>Bahasa Indonesia</th>
                <td>{{ $nilai->bhs_indonesia }}</td>
            </tr>
				<th>Matematika</th>
                <td>{{ $nilai->matematika }}</td>	
            </tr>
				<th>IPA</th>
                <td>{{ $nilai->ipa }}</td>	
            </tr>
				<th>IPS</th>
                <td>{{ $nilai->ips }}</td>
            </tr>
            <!-- tambahkan baris untuk data siswa lainnya di sini -->
        </tbody>
    </table>
</div>
<a href="{{ route('nilais.edit', [$nilai->id]) }}" class="btn btn-primary btn-lg d-block mx-auto">Edit Data</a>
<br>
<br>


	@endsection