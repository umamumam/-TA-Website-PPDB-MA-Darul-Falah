@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Form Pendaftaran Siswa Baru</h1>
<br>
<p><span style="color: red;">Pastikan anda mengisi data berikut dengan benar!</span></p>
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['route' => 'ppdbs.store']) !!}

		<div class="mb-3">
			{{ Form::label('nisn', 'Nisn', ['class'=>'form-label']) }}
			{{ Form::text('nisn', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nik_peserta', 'Nik_peserta', ['class'=>'form-label']) }}
			{{ Form::text('nik_peserta', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nm_peserta', 'Nm_peserta', ['class'=>'form-label']) }}
			{{ Form::text('nm_peserta', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('jenis_kelamin', 'Jenis_kelamin', ['class'=>'form-label']) }}
			<br>
        	{{ Form::select('jenis_kelamin', ['' => 'Jenis Kelamin', 'Laki-laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], null, ['class' => 'form-select custom-select', 'required']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tmpt_lahir', 'Tmpt_lahir', ['class'=>'form-label']) }}
			{{ Form::text('tmpt_lahir', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tgl_lahir', 'Tgl_lahir', ['class'=>'form-label']) }}
			{{ Form::date('tgl_lahir', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('anak_ke', 'Anak ke', ['class'=>'form-label']) }}
			{{ Form::input('number', 'anak_ke', null, ['class' => 'form-control']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('no_kk', 'No_kk', ['class'=>'form-label']) }}
			{{ Form::text('no_kk', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nik_ayah', 'Nik_ayah', ['class'=>'form-label']) }}
			{{ Form::text('nik_ayah', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nama_ayah', 'Nama_ayah', ['class'=>'form-label']) }}
			{{ Form::text('nama_ayah', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('pend_ayah', 'Pend_ayah', ['class'=>'form-label']) }}
			{{ Form::text('pend_ayah', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('pek_ayah', 'Pek_ayah', ['class'=>'form-label']) }}
			{{ Form::text('pek_ayah', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nik_ibu', 'Nik_ibu', ['class'=>'form-label']) }}
			{{ Form::text('nik_ibu', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nama_ibu', 'Nama_ibu', ['class'=>'form-label']) }}
			{{ Form::text('nama_ibu', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('pend_ibu', 'Pend_ibu', ['class'=>'form-label']) }}
			{{ Form::text('pend_ibu', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('pek_ibu', 'Pek_ibu', ['class'=>'form-label']) }}
			{{ Form::text('pek_ibu', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('telp_peserta', 'Telp_peserta', ['class'=>'form-label']) }}
			{{ Form::text('telp_peserta', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('telp_ortu', 'Telp_ortu', ['class'=>'form-label']) }}
			{{ Form::text('telp_ortu', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('alamat_peserta', 'Alamat_peserta', ['class'=>'form-label']) }}
			{{ Form::text('alamat_peserta', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('kode_pos', 'Kode_pos', ['class'=>'form-label']) }}
			{{ Form::text('kode_pos', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('asal_sekolah', 'Asal_sekolah', ['class'=>'form-label']) }}
			{{ Form::text('asal_sekolah', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('npsn', 'Npsn', ['class'=>'form-label']) }}
			{{ Form::text('npsn', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('nsm', 'Nsm', ['class'=>'form-label']) }}
			{{ Form::text('nsm', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('alamat_sekolah', 'Alamat_sekolah', ['class'=>'form-label']) }}
			{{ Form::text('alamat_sekolah', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('kriteria_peserta', 'Kriteria_peserta', ['class'=>'form-label']) }}<br>
        	{{ Form::select('kriteria_peserta', ['' => 'Kriteria Peserta', 'Siswa_Baru' => 'Siswa_Baru', 'Siswa_Lama' => 'Siswa_Lama'], null, ['class' => 'form-select custom-select', 'required']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('peminatan', 'Peminatan', ['class'=>'form-label']) }}<br>
        	{{ Form::select('peminatan', ['' => 'Peminatan', 'Agama' => 'Agama', 'IPA' => 'IPA', 'IPS' => 'IPS'], null, ['class' => 'form-select custom-select', 'required']) }}
		</div>
		<div class="mb-3">
			{{ Form::label('no_kip', 'No_kip', ['class'=>'form-label']) }}
			<p><span style="color: red;">*Jika tidak memiliki di isi "0"</span></p>
			{{ Form::text('no_kip', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('no_kks', 'No_kks', ['class'=>'form-label']) }}
			<p><span style="color: red;">*Jika tidak memiliki di isi "0"</span></p>
			{{ Form::text('no_kks', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('no_pkh', 'No_pkh', ['class'=>'form-label']) }}
			<p><span style="color: red;">*Jika tidak memiliki di isi "0"</span></p>
			{{ Form::text('no_pkh', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-3">
			{{ Form::label('tgl_daftar', 'Tgl_daftar', ['class'=>'form-label']) }}
			{{ Form::date('tgl_daftar', null, array('class' => 'form-control')) }}
		</div>


		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}
		
	{{ Form::close() }}

	<br>
	<br>
	@endsection