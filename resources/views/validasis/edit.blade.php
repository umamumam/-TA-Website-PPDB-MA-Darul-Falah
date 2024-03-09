@extends('layouts1.app')

@section('contents')

	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{{ Form::model($validasi, array('route' => array('validasis.update', $validasi->id), 'method' => 'PUT')) }}

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
			{{ Form::label('status', 'Status', ['class'=>'form-label']) }}<br>
			<select name="status" id="status" class="form-control" required>
				<option value="Menunggu Verifikasi"{{ $validasi->status === 'Menunggu Verifikasi' ? 'selected' : '' }}>Menunggu Verifikasi</option>
				<option value="Sudah Terverifikasi"{{ $validasi->status === 'Sudah Terverifikasi' ? 'selected' : '' }}>Sudah Terverifikasi</option>
			</select>
		</div>

		{{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
	@endsection
