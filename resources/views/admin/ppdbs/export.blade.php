<style>
	th,
      td {
        border: 1px solid #000;
        padding: 8px;
      }
	  @page {
    size: landscape;
}
</style>
<h1 align="center"> Data Pendaftaran Siswa</h1>
	
	
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
				<th>nik_ayah</th>
				<th>nama_ayah</th>
				<th>pend_ayah</th>
				<th>pek_ayah</th>
				<th>nik_ibu</th>
				<th>nama_ibu</th>
				<th>pend_ibu</th>
				<th>pek_ibu</th>
				<th>telp_peserta</th>
				<th>telp_ortu</th>
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

				
			</tr>
		</thead>
		<tbody>
		@foreach($ppdbs as $ppdb)
			

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
			<td>{{ $ppdb->nik_ayah }}</td>
			<td>{{ $ppdb->nama_ayah }}</td>
			<td>{{ $ppdb->pend_ayah }}</td>
			<td>{{ $ppdb->pek_ayah }}</td>
			<td>{{ $ppdb->nik_ibu }}</td>
			<td>{{ $ppdb->nama_ibu }}</td>
			<td>{{ $ppdb->pend_ibu }}</td>
			<td>{{ $ppdb->pek_ibu }}</td>
			<td>{{ $ppdb->telp_peserta }}</td>
			<td>{{ $ppdb->telp_ortu }}</td>
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

		</tr>

			@endforeach
		</tbody>
	</table>


