@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Form Daftar Raport Nilai Siswa Baru</h1>
<br>
<p><span style="color: red;">Pastikan data yang dimasukkan sesuai data di raport!</span></p>
@if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>
@endif

{!! Form::open(['route' => 'nilais.store']) !!}
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="mb-3">
            {{ Form::label('nisn', 'NISN', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::text('nisn', null, array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="mb-3">
            {{ Form::label('nama_peserta', 'Nama Peserta', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::text('nama_peserta', null, array('class' => 'form-control')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-4">
        <div class="mb-3">
            {{ Form::label('akidah', 'Akidah', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::input('number', 'akidah', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="mb-3">
            {{ Form::label('hadis', 'Hadis', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::input('number', 'hadis', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="mb-3">
            {{ Form::label('fikih', 'Fikih', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::input('number', 'fikih', null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-4">
        <div class="mb-3">
            {{ Form::label('bhs_arab', 'Bahasa Arab', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::input('number', 'bhs_arab', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="mb-3">
            {{ Form::label('bhs_inggris', 'Bahasa Inggris', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::input('number', 'bhs_inggris', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="mb-3">
            {{ Form::label('bhs_indonesia', 'Bahasa Indonesia', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::input('number', 'bhs_indonesia', null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-4">
        <div class="mb-3">
            {{ Form::label('matematika', 'Matematika', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::input('number', 'matematika', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="mb-3">
            {{ Form::label('ipa', 'IPA', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::input('number', 'ipa', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="mb-3">
            {{ Form::label('ips', 'IPS', ['class'=>'form-label text-nowrap']) }}<span style="color: red;">*</span>
            {{ Form::input('number', 'ips', null, ['class' => 'form-control']) }}
        </div>
    </div>
</div>

{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

<br>
<br>
@endsection
