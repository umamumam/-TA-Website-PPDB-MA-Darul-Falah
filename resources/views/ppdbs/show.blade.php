@extends('layouts1.app')

@section('contents')
    <h1 align="center">Data Pendaftaran Siswa Baru</h1>
    <br>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-info">
            <li class="nav-item">
                <button id="siswaButton" class="btn btn-light active mr-4">Data Siswa</button>
            </li>
            <li class="nav-item">
                <button id="orangTuaButton" class="btn btn-light mr-4">Data Orang Tua</button>
            </li>
            <li class="breadcrumb-item ml-auto">
                <a href="{{ route('ppdbs.edit', [$ppdb->id]) }}" class="btn btn-light">Edit Data</a>
            </li>
        </ol>
    </nav>
    <div class="tab-content mt-3">
        <!-- Data Siswa -->
        <div id="siswaData" class="tab-pane fade show active">
            <div class="card">
                <h5 class="card-header" align="center">Data Siswa</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>id</th>
                                    <td>{{ $ppdb->id }}</td>
                                </tr>
                                <tr>
                                    <th>NISN</th>
                                    <td>{{ $ppdb->nisn }}</td>
                                </tr>
                                <tr>
                                    <th>Nik Peserta</th>
                                    <td>{{ $ppdb->nik_peserta }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Peserta</th>
                                    <td>{{ $ppdb->nm_peserta }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $ppdb->jenis_kelamin }}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $ppdb->tmpt_lahir }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ \Carbon\Carbon::parse($ppdb->tgl_lahir)->format('d F Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Anak Ke</th>
                                    <td>{{ $ppdb->anak_ke }}</td>
                                </tr>
                                <tr>
                                    <th>No KK</th>
                                    <td>{{ $ppdb->no_kk }}</td>
                                </tr>
                                <tr>
                                    <th>Telp Peserta</th>
                                    <td>{{ $ppdb->telp_peserta }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Peserta</th>
                                    <td>{{ $ppdb->alamat_peserta }}</td>
                                </tr>
                                <tr>
                                    <th>Kode Pos</th>
                                    <td>{{ $ppdb->kode_pos }}</td>
                                </tr>
                                <tr>
                                    <th>Asal Sekolah</th>
                                    <td>{{ $ppdb->asal_sekolah }}</td>
                                </tr>
                                <tr>
                                    <th>NPSN</th>
                                    <td>{{ $ppdb->npsn }}</td>
                                </tr>
                                <tr>
                                    <th>NSM</th>
                                    <td>{{ $ppdb->nsm }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Sekolah</th>
                                    <td>{{ $ppdb->alamat_sekolah }}</td>
                                </tr>
                                <tr>
                                    <th>Kriteria Peserta</th>
                                    <td>{{ $ppdb->kriteria_peserta }}</td>
                                </tr>
                                <tr>
                                    <th>Peminatan</th>
                                    <td>{{ $ppdb->peminatan }}</td>
                                </tr>
                                <tr>
                                    <th>NO KIP</th>
                                    <td>{{ $ppdb->no_kip }}</td>
                                </tr>
                                <tr>
                                    <th>NO KKS</th>
                                    <td>{{ $ppdb->no_kks }}</td>
                                </tr>
                                <tr>
                                    <th>NO PKH</th>
                                    <td>{{ $ppdb->no_pkh }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Daftar</th>
                                    <td>{{ \Carbon\Carbon::parse($ppdb->tgl_daftar)->format('d F Y') }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data Orang Tua -->
        <div id="orangTuaData" class="tab-pane fade">
            <div class="card">
                <h5 class="card-header" align="center">Data Orang Tua</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>NO KK</th>
                                    <td>{{ $ppdb->no_kk }}</td>
                                </tr>
                                <tr>
                                    <th>NIK Ayah</th>
                                    <td>{{ $ppdb->nik_ayah }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ayah</th>
                                    <td>{{ $ppdb->nama_ayah }}</td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Ayah</th>
                                    <td>{{ $ppdb->pend_ayah }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ayah</th>
                                    <td>{{ $ppdb->pek_ayah }}</td>
                                </tr>
                                <tr>
                                    <th>NIK Ibu</th>
                                    <td>{{ $ppdb->nik_ibu }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Ibu</th>
                                    <td>{{ $ppdb->nama_ibu }}</td>
                                </tr>
                                <tr>
                                    <th>Pendidikan Ibu</th>
                                    <td>{{ $ppdb->pend_ibu }}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan Ibu</th>
                                    <td>{{ $ppdb->pek_ibu }}</td>
                                </tr>
                                <tr>
                                    <th>Telp Ortu</th>
                                    <td>{{ $ppdb->telp_ortu }}</td>
                                </tr>
                                <!-- tambahkan baris untuk data orang tua lainnya di sini -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const siswaButton = document.getElementById('siswaButton');
            const orangTuaButton = document.getElementById('orangTuaButton');
            const siswaData = document.getElementById('siswaData');
            const orangTuaData = document.getElementById('orangTuaData');

            siswaButton.addEventListener('click', function() {
                siswaData.classList.add('show', 'active');
                orangTuaData.classList.remove('show', 'active');
                siswaButton.classList.add('active');
                orangTuaButton.classList.remove('active');
            });

            orangTuaButton.addEventListener('click', function() {
                siswaData.classList.remove('show', 'active');
                orangTuaData.classList.add('show', 'active');
                siswaButton.classList.remove('active');
                orangTuaButton.classList.add('active');
            });
        });
    </script>
@endsection
