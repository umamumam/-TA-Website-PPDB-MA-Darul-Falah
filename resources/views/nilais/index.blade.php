@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Data Nilai Raport Siswa Baru</h1>
<br>
<div class="d-flex justify-content-end mb-3"><a href="{{ route('nilais.create') }}" class="btn btn-info">Create</a></div>
<div style="text-align: right; margin-bottom: 20px">
    <a class="btn btn-success" href="/nilais-export">Export Excel</a>
</div>
<div class="table-responsive" style="overflow-x: auto;">
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
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>NISN</th>
                <th>Nama Peserta</th>
                <th>Akidah</th>
                <th>Hadis</th>
                <th>Fikih</th>
                <th>Bahasa Arab</th>
                <th>Bahasa Inggris</th>
                <th>Bahasa Indonesia</th>
                <th>Matematika</th>
                <th>IPA</th>
                <th>IPS</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilais as $nilai)

                <tr>
                    <td>{{ $nilai->id }}</td>
                    <td>{{ $nilai->nisn }}</td>
                    <td>{{ $nilai->nama_peserta }}</td>
                    <td>{{ $nilai->akidah }}</td>
                    <td>{{ $nilai->hadis }}</td>
                    <td>{{ $nilai->fikih }}</td>
                    <td>{{ $nilai->bhs_arab }}</td>
                    <td>{{ $nilai->bhs_inggris }}</td>
                    <td>{{ $nilai->bhs_indonesia }}</td>
                    <td>{{ $nilai->matematika }}</td>
                    <td>{{ $nilai->ipa }}</td>
                    <td>{{ $nilai->ips }}</td>

                    <td>
                        <div class="d-flex gap-2">
                            <a href="{{ route('nilais.show', [$nilai->id]) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('nilais.edit', [$nilai->id]) }}" class="btn btn-primary">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['nilais.destroy', $nilai->id]]) !!}
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
