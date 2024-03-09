@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Edit Nilai Raport Siswa Baru</h1>
<br>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($nilai, array('route' => array('nilais.update', $nilai->id), 'method' => 'PUT')) }}

		<div class="mb-3">
			{{ Form::label('nisn', 'Nisn', ['class'=>'form-label']) }}
			{{ Form::text('nisn', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nama_peserta', 'Nama_peserta', ['class'=>'form-label']) }}
			{{ Form::text('nama_peserta', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('akidah', 'Akidah', ['class'=>'form-label']) }}
			{{ Form::number('akidah', null, ['class' => 'form-control']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('hadis', 'Hadis', ['class'=>'form-label']) }}
			{{ Form::number('hadis', null, ['class' => 'form-control']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('fikih', 'Fikih', ['class'=>'form-label']) }}
			{{ Form::number('fikih', null, ['class' => 'form-control']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('bhs_arab', 'Bhs_arab', ['class'=>'form-label']) }}
			{{ Form::number('bhs_arab', null, ['class' => 'form-control']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('bhs_inggris', 'Bhs_inggris', ['class'=>'form-label']) }}
			{{ Form::number('bhs_inggris', null, ['class' => 'form-control']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('bhs_indonesia', 'Bhs_indonesia', ['class'=>'form-label']) }}
			{{ Form::number('bhs_indonesia', null, ['class' => 'form-control']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('matematika', 'Matematika', ['class'=>'form-label']) }}
			{{ Form::number('matematika', null, ['class' => 'form-control']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('ipa', 'Ipa', ['class'=>'form-label']) }}
			{{ Form::number('ipa', null, ['class' => 'form-control']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('ips', 'Ips', ['class'=>'form-label']) }}
			{{ Form::number('ips', null, ['class' => 'form-control']) }}
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	<br>
	<br>
	@endsection
