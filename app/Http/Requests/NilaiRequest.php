<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NilaiRequest extends FormRequest
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
			'nama_peserta' => 'required',
			'akidah' => 'required',
			'hadis' => 'required',
			'fikih' => 'required',
			'bhs_arab' => 'required',
			'bhs_inggris' => 'required',
			'bhs_indonesia' => 'required',
			'matematika' => 'required',
			'ipa' => 'required',
			'ips' => 'required',
        ];
    }
}
