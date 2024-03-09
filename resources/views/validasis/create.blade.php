@extends('layouts1.app')

@section('contents')
<h1 align="center">Form Validasi Siswa Baru</h1>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'validasis.store']) !!}

		<div class="mb-3">
			{{ Form::label('nisn', 'Nisn', ['class'=>'form-label']) }}
			{{ Form::text('nisn', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nama_peserta', 'Nama_peserta', ['class'=>'form-label']) }}
			{{ Form::text('nama_peserta', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('email_wa', 'Email_wa', ['class'=>'form-label']) }}
			{{ Form::text('email_wa', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('status', 'Status', ['class'=>'form-label']) }}
			<br>
        	{{ Form::select('status', ['' => 'Status', 'Menunggu Verifikasi' => 'Menunggu Verifikasi', 'Sudah Terverifikasi' => 'Sudah Terverifikasi'], null, ['class' => 'form-select custom-select', 'nullable']) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}

	@endsection