<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PpdbRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return
        [
			'nisn' => 'required',
			'nik_peserta' => 'required',
			'nm_peserta' => 'required',
			'jenis_kelamin' => 'required',
			'tmpt_lahir' => 'required',
			'tgl_lahir' => 'required',
			'anak_ke' => 'required',
			'no_kk' => 'required',
			'nik_ayah' => 'required',
			'nama_ayah' => 'required',
			'pend_ayah' => 'required',
			'pek_ayah' => 'required',
			'nik_ibu' => 'required',
			'nama_ibu' => 'required',
			'nama_ibu' => 'required',
			'pend_ibu' => 'required',
			'pek_ibu' => 'required',
			'telp_peserta' => 'required',
			'telp_ortu' => 'required',
			'alamat_peserta' => 'required',
			'kode_pos' => 'required',
			'asal_sekolah' => 'required',
			'npsn' => 'required',
			'nsm' => 'required',
			'alamat_sekolah' => 'required',
			'kriteria_peserta' => 'required',
			'peminatan' => 'required',
			'no_kip' => 'nullable',
			'no_kks' => 'nullable',
			'no_pkh' => 'nullable',
			'tgl_daftar' => 'required',
        ];
    }
}
