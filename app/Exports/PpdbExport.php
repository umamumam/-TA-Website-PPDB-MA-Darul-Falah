<?php

namespace App\Exports;

use App\Models\Ppdb;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PpdbExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ppdb::all();
    }
    public function headings(): array
    {
        return [
            'id',
			'nisn',
			'nik_peserta',
			'nm_peserta',
			'jenis_kelamin',
			'tmpt_lahir',
			'tgl_lahir',
			'anak_ke',
			'no_kk',
			'nik_ayah',
			'nama_ayah',
			'pend_ayah',
			'pek_ayah',
			'nik_ibu',
			'nama_ibu',
			'pend_ibu',
			'pek_ibu',
			'telp_peserta',
			'telp_ortu',
			'alamat_peserta',
			'kode_pos',
			'asal_sekolah',
			'npsn',
			'nsm',
			'alamat_sekolah',
			'kriteria_peserta',
			'peminatan',
			'no_kip',
			'no_kks',
			'no_pkh',
			'tgl_daftar',
            // Tambahkan judul kolom lainnya di sini sesuai kebutuhan
        ];
    }
}
