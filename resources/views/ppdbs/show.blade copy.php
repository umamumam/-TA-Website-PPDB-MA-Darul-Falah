@extends('layouts1.app')

@section('contents')
    <h1 align="center">Data Pendaftaran Siswa Baru</h1>
	<br>
    <div class="d-flex justify-content-end mb-3 mr-4">
        <button id="siswaButton" class="btn btn-info active mr-4">Data Siswa</button>
        <button id="orangTuaButton" class="btn btn-info mr-4">Data Orang Tua</button>
    </div>
	
    <!-- Data Siswa -->
    <div id="siswaData">
        <h2>Data Siswa</h2>
		<div class="table-responsive" style="overflow-x: auto;">
        <table class="table table-bordered">
		<thead>
			  <tr>
			  <th>id</th>
				<th>nisn</th>
				<th>nik_peserta</th>
				<th>nm_peserta</th>
				<th>jenis_kelamin</th>
				<th>tmpt_lahir</th>
				<th>tgl_lahir</th>
				<th>anak_ke</th>
				<th>no_kk</th>
				<th>telp_peserta</th>
				<th>alamat_peserta</th>
				<th>kode_pos</th>
				<th>asal_sekolah</th>
				<th>npsn</th>
				<th>nsm</th>
				<th>alamat_sekolah</th>
				<th>kriteria_peserta</th>
				<th>peminatan</th>
				<th>no_kip</th>
				<th>no_kks</th>
				<th>no_pkh</th>
				<th>tgl_daftar</th>

				<th>Action</th>
			  </tr>
		  </thead>
		  <thead>
			  <tr>
			  <td>{{ $ppdb->id }}</td>
					<td>{{ $ppdb->nisn }}</td>
					<td>{{ $ppdb->nik_peserta }}</td>
					<td>{{ $ppdb->nm_peserta }}</td>
					<td>{{ $ppdb->jenis_kelamin }}</td>
					<td>{{ $ppdb->tmpt_lahir }}</td>
					<td>{{ \Carbon\Carbon::parse($ppdb->tgl_lahir)->format('d F Y') }}</td>
					<td>{{ $ppdb->anak_ke }}</td>
					<td>{{ $ppdb->no_kk }}</td>
					<td>{{ $ppdb->telp_peserta }}</td>
					<td>{{ $ppdb->alamat_peserta }}</td>
					<td>{{ $ppdb->kode_pos }}</td>
					<td>{{ $ppdb->asal_sekolah }}</td>
					<td>{{ $ppdb->npsn }}</td>
					<td>{{ $ppdb->nsm }}</td>
					<td>{{ $ppdb->alamat_sekolah }}</td>
					<td>{{ $ppdb->kriteria_peserta }}</td>
					<td>{{ $ppdb->peminatan }}</td>
					<td>{{ $ppdb->no_kip }}</td>
					<td>{{ $ppdb->no_kks }}</td>
					<td>{{ $ppdb->no_pkh }}</td>
					<td>{{ \Carbon\Carbon::parse($ppdb->tgl_daftar)->format('d F Y') }}</td>  
					<td>
						<div class="d-flex gap-2">
							<a href="/form-pdf/{{ $ppdb->id }}" class="btn btn-info">Cetak Surat Pernyataan</a>
                            <a href="{{ route('ppdbs.edit', [$ppdb->id]) }}" class="btn btn-primary">Edit</a>

                        </div>
					</td>
			  </tr>
		  </thead>
        </table>
		</div>
    </div>

    <!-- Data Orang Tua -->
    <div id="orangTuaData" style="display: none;">
        <h2>Data Orang Tua</h2>
        <div class="table-responsive" style="overflow-x: auto;">
        <table class="table table-bordered">
		<thead>
			  <tr>
			  <th>no_kk</th>
			  <th>nik_ayah</th>
				<th>nama_ayah</th>
				<th>pend_ayah</th>
				<th>pek_ayah</th>
				<th>nik_ibu</th>
				<th>nama_ibu</th>
				<th>pend_ibu</th>
				<th>pek_ibu</th>
				<th>telp_ortu</th>

				<th>Action</th>
			  </tr>
		  </thead>
		  <thead>
			  <tr>
					<td>{{ $ppdb->no_kk }}</td>
					<td>{{ $ppdb->nik_ayah }}</td>
					<td>{{ $ppdb->nama_ayah }}</td>
					<td>{{ $ppdb->pend_ayah }}</td>
					<td>{{ $ppdb->pek_ayah }}</td>
					<td>{{ $ppdb->nik_ibu }}</td>
					<td>{{ $ppdb->nama_ibu }}</td>
					<td>{{ $ppdb->pend_ibu }}</td>
					<td>{{ $ppdb->pek_ibu }}</td>
					
					<td>{{ $ppdb->telp_ortu }}</td>
					
					<td>
						<div class="d-flex gap-2">
							<a href="/form-pdf/{{ $ppdb->id }}" class="btn btn-info">Cetak Surat Pernyataan</a>
                            <a href="{{ route('ppdbs.edit', [$ppdb->id]) }}" class="btn btn-primary">Edit</a>

                        </div>
					</td>
			  </tr>
		  </thead>
        </table>
		</div>
    </div>
@endsection


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const siswaButton = document.getElementById('siswaButton');
        const orangTuaButton = document.getElementById('orangTuaButton');
        const siswaData = document.getElementById('siswaData');
        const orangTuaData = document.getElementById('orangTuaData');

        siswaButton.addEventListener('click', function() {
            siswaData.style.display = 'block';
            orangTuaData.style.display = 'none';
            siswaButton.classList.add('active');
            orangTuaButton.classList.remove('active');
        });

        orangTuaButton.addEventListener('click', function() {
            siswaData.style.display = 'none';
            orangTuaData.style.display = 'block';
            siswaButton.classList.remove('active');
            orangTuaButton.classList.add('active');
        });
    });
</script>
