@extends('layouts1.app')

@section('contents')
<br>
<h1 align="center">Form Pendaftaran Siswa Baru</h1>
<br>
<p><span style="color: red;">Pastikan Anda mengisi data berikut dengan benar!</span></p>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

{!! Form::open(['route' => 'ppdbs.store']) !!}

<fieldset>
    <legend>Data Peserta</legend>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="mb-2">
                {{ Form::label('nisn', 'NISN', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                {{ Form::text('nisn', null, array('class' => 'form-control')) }}
            </div>
            <div class="mb-2">
                {{ Form::label('nik_peserta', 'NIK PESERTA', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                {{ Form::text('nik_peserta', null, array('class' => 'form-control')) }}
            </div>
			<div class="mb-2">
				{{ Form::label('tmpt_lahir', 'Tempat Lahir', ['class'=>'form-label']) }}<span style="color: red;">*</span>
				{{ Form::text('tmpt_lahir', null, array('class' => 'form-control')) }}
			</div>
			
            <!-- tambahkan input data peserta lainnya di sini -->
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="mb-2">
                {{ Form::label('nm_peserta', 'Nama Peserta', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                {{ Form::text('nm_peserta', null, array('class' => 'form-control')) }}
            </div>
            <!-- tambahkan input data peserta lainnya di sini -->
			<div class="mb-2">
				{{ Form::label('jenis_kelamin', 'Jenis Kelamin', ['class'=>'form-label']) }}<span style="color: red;">*</span>
				<br>
				{{ Form::select('jenis_kelamin', ['' => 'Jenis Kelamin', 'Laki-laki' => 'Laki-Laki', 'Perempuan' => 'Perempuan'], null, ['class' => 'form-select custom-select', 'required']) }}
			</div>
			<div class="mb-2">
				{{ Form::label('tgl_lahir', 'Tanggal Lahir', ['class'=>'form-label']) }}<span style="color: red;">*</span>
				{{ Form::date('tgl_lahir', null, array('class' => 'form-control')) }}
			</div>
			
        </div>
    </div>

</fieldset>
<div class="row">
    <div class="col-xs-12 col-sm-12">
        <fieldset>
            
            <div class="row">
                <div class="col-xs-12 col-sm-4">
				<div class="mb-2">
				{{ Form::label('telp_peserta', 'Telepon Peserta', ['class'=>'form-label']) }}<span style="color: red;">*</span>
				{{ Form::text('telp_peserta', null, array('class' => 'form-control')) }}
			</div>
                </div>
                <div class="col-xs-12 col-sm-4">
                <div class="mb-2">
                    {{ Form::label('anak_ke', 'Anak ke', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                    {{ Form::input('number', 'anak_ke', null, ['class' => 'form-control']) }}
					</div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="mb-2">
                    {{ Form::label('kode_pos', 'Kode Pos', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                    {{ Form::text('kode_pos', null, array('class' => 'form-control')) }}
                </div>
				</div>
            </div>
        </fieldset>
    </div>
</div>
<div class="mb-2">
		{{ Form::label('alamat_peserta', 'Alamat Peserta', ['class'=>'form-label']) }}<span style="color: red;">*</span>
		{{ Form::text('alamat_peserta', null, array('class' => 'form-control')) }}
	</div>



<fieldset>
    <legend>Data Orang Tua</legend>
	<div class="mb-2">
				{{ Form::label('no_kk', 'NO KK', ['class'=>'form-label']) }}<span style="color: red;">*</span>
				{{ Form::text('no_kk', null, array('class' => 'form-control')) }}
			</div>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
		<div class="mb-2">
                {{ Form::label('nik_ayah', 'NIK Ayah', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                {{ Form::text('nik_ayah', null, array('class' => 'form-control')) }}
            </div>
			<div class="mb-2">
                {{ Form::label('nama_ayah', 'Nama Ayah', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                {{ Form::text('nama_ayah', null, array('class' => 'form-control')) }}
            </div>
			<div class="mb-2">
			{{ Form::label('pend_ayah', 'Pendidikan Ayah', ['class'=>'form-label']) }}<span style="color: red;">*</span>
			{{ Form::text('pend_ayah', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-2">
			{{ Form::label('pek_ayah', 'Pekerjaan Ayah', ['class'=>'form-label']) }}<span style="color: red;">*</span>
			{{ Form::text('pek_ayah', null, array('class' => 'form-control')) }}
		</div>
            <!-- tambahkan input data peserta lainnya di sini -->
        </div>
        <div class="col-xs-12 col-sm-6">
		<div class="mb-2">
                {{ Form::label('nik_ibu', 'NIK Ibu', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                {{ Form::text('nik_ibu', null, array('class' => 'form-control')) }}
            </div>    
		<div class="mb-2">
                {{ Form::label('nama_ibu', 'Nama Ibu', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                {{ Form::text('nama_ibu', null, array('class' => 'form-control')) }}
            </div>
			<div class="mb-2">
			{{ Form::label('pend_ibu', 'Pendidikan Ibu', ['class'=>'form-label']) }}<span style="color: red;">*</span>
			{{ Form::text('pend_ibu', null, array('class' => 'form-control')) }}
		</div>
		<div class="mb-2">
			{{ Form::label('pek_ibu', 'Pekerjaan Ibu', ['class'=>'form-label']) }}<span style="color: red;">*</span>
			{{ Form::text('pek_ibu', null, array('class' => 'form-control')) }}
		</div>
           <!-- tambahkan input data peserta lainnya di sini -->
        </div>	
	</div>
	<div class="mb-2">
			{{ Form::label('telp_ortu', 'Telepon Ortu', ['class'=>'form-label']) }}<span style="color: red;">*</span>
			{{ Form::text('telp_ortu', null, array('class' => 'form-control')) }}
		</div>
</fieldset>


<fieldset>
    <legend>Data Sekolah Asal</legend>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="mb-2">
                {{ Form::label('asal_sekolah', 'Asal Sekolah', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                {{ Form::text('asal_sekolah', null, array('class' => 'form-control')) }}
            </div>
			<div class="mb-2">
			{{ Form::label('nsm', 'NSM', ['class'=>'form-label']) }}<span style="color: red;">*</span>
			{{ Form::text('nsm', null, array('class' => 'form-control')) }}
		</div>
            <!-- tambahkan input data sekolah lainnya di sini -->
        </div>
        <div class="col-xs-12 col-sm-6">
		<div class="mb-2">
			{{ Form::label('alamat_sekolah', 'Alamat Sekolah', ['class'=>'form-label']) }}<span style="color: red;">*</span>
			{{ Form::text('alamat_sekolah', null, array('class' => 'form-control')) }}
		</div>
            <div class="mb-2">
                {{ Form::label('npsn', 'NPSM', ['class'=>'form-label']) }}<span style="color: red;">*</span>
                {{ Form::text('npsn', null, array('class' => 'form-control')) }}
            </div>
            <!-- tambahkan input data sekolah lainnya di sini -->
        </div>
    </div>
</fieldset>

<fieldset>
    <legend>Data Pendaftaran</legend>
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="mb-2">
                {{ Form::label('kriteria_peserta', 'Kriteria Peserta', ['class'=>'form-label']) }}<span style="color: red;">*</span><br>
                {{ Form::select('kriteria_peserta', ['' => 'Kriteria Peserta', 'Siswa Baru' => 'Siswa Baru', 'Siswa Naik Tingkat' => 'Siswa Naik Tingkat'], null, ['class' => 'form-select custom-select', 'required']) }}
            </div>
			<div class="mb-2">
				{{ Form::label('tgl_daftar', 'Tanggal Daftar', ['class'=>'form-label']) }}<span style="color: red;">*</span>
				{{ Form::date('tgl_daftar', null, array('class' => 'form-control')) }}
			</div>
            <!-- tambahkan input data lainnya di sini -->
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="mb-2">
                {{ Form::label('peminatan', 'Peminatan', ['class'=>'form-label']) }}<span style="color: red;">*</span><br>
                {{ Form::select('peminatan', ['' => 'Peminatan', 'Agama' => 'Agama', 'IPA' => 'IPA', 'IPS' => 'IPS'], null, ['class' => 'form-select custom-select', 'required']) }}
            </div>
			<div class="mb-2">
                {{ Form::label('tahun_pelajaran', 'Tahun Pelajaran', ['class'=>'form-label']) }}<span style="color: red;">*</span><br>
                <select name="tahun_pelajaran" id="tahun_pelajaran" class="form-select custom-select" required>
                    <!-- JavaScript akan mengisi pilihan tahun pelajaran di sini -->
                </select>
            </div>
            <!-- tambahkan input data lainnya di sini -->
        </div>
    </div>
</fieldset>

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <fieldset>
            <legend>Data Tambahan</legend>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="mb-2">
                        {{ Form::label('no_kip', 'NO KIP', ['class'=>'form-label']) }}
                        {{ Form::text('no_kip', null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="mb-2">
                        {{ Form::label('no_kks', 'NO KKS', ['class'=>'form-label']) }}
                        {{ Form::text('no_kks', null, array('class' => 'form-control')) }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="mb-2">
                        {{ Form::label('no_pkh', 'NO PKH', ['class'=>'form-label']) }}
                        {{ Form::text('no_pkh', null, array('class' => 'form-control')) }}
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
</div>
<br>
{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}

{!! Form::close() !!}

<br>
<br>
<script>
    // Fungsi untuk mengisi pilihan tahun pelajaran
    function fillTahunPelajaran() {
        var select = document.getElementById('tahun_pelajaran');
        var currentYear = new Date().getFullYear(); // Tahun sekarang
        var startYear = currentYear - 1; // Tahun awal pelajaran (1 tahun sebelum tahun sekarang)

        // Membuat pilihan tahun pelajaran dari tahun awal hingga tahun sekarang
        for (var year = startYear; year <= currentYear; year++) {
            var option = document.createElement('option');
            option.text = option.value = year + '/' + (year + 1);
            select.add(option);
        }
    }

    // Memanggil fungsi untuk mengisi pilihan tahun pelajaran saat halaman dimuat
    fillTahunPelajaran();
</script>
@endsection
