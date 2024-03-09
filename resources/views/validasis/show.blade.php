@extends('layouts1.app')

@section('contents')

	{{ $validasi->id }}
	<div class="mb-3">
            {{ Form::label('file', 'Unggah Berkas PDF', ['class'=>'form-label']) }}
            {{ Form::file('file', ['class' => 'form-control']) }}
        </div>

	@endsection