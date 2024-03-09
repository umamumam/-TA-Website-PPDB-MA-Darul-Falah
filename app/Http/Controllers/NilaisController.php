<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\Nilai;
use App\Exports\NilaiExport;
use App\Http\Requests\NilaiRequest;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class NilaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $nilais= Nilai::all();
        return view('nilais.index', ['nilais'=>$nilais]);
    }
    public function export() 
    {
        return Excel::download(new NilaiExport, 'nilais-'.Carbon::now()->timestamp.'.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('nilais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  NilaiRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NilaiRequest $request)
    {
        // Memeriksa apakah nama peserta sudah ada dalam basis data
    $existingNilai = Nilai::where('nama_peserta', $request->input('nama_peserta'))->first();

    if ($existingNilai) {
        // Jika nama peserta sudah ada, maka tolak pendaftaran dan kembalikan respons error
        return redirect()->back()->withErrors(['nama_peserta' => 'Anda Sudah Menginputkan Data, Maka Tidak Bisa Input Data Lagi.']);
    }
        $nilai = new Nilai;
		$nilai->nisn = $request->input('nisn');
		$nilai->nama_peserta = $request->input('nama_peserta');
		$nilai->akidah = $request->input('akidah');
		$nilai->hadis = $request->input('hadis');
		$nilai->fikih = $request->input('fikih');
		$nilai->bhs_arab = $request->input('bhs_arab');
		$nilai->bhs_inggris = $request->input('bhs_inggris');
		$nilai->bhs_indonesia = $request->input('bhs_indonesia');
		$nilai->matematika = $request->input('matematika');
		$nilai->ipa = $request->input('ipa');
		$nilai->ips = $request->input('ips');
        $nilai->save();
        $nilai->id;

        return view('nilais.show',['nilai'=>$nilai]);
        //return to_route('nilais.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('nilais.show',['nilai'=>$nilai]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('nilais.edit',['nilai'=>$nilai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  NilaiRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(NilaiRequest $request, $id)
    {
        $nilai = Nilai::findOrFail($id);
		$nilai->nisn = $request->input('nisn');
		$nilai->nama_peserta = $request->input('nama_peserta');
		$nilai->akidah = $request->input('akidah');
		$nilai->hadis = $request->input('hadis');
		$nilai->fikih = $request->input('fikih');
		$nilai->bhs_arab = $request->input('bhs_arab');
		$nilai->bhs_inggris = $request->input('bhs_inggris');
		$nilai->bhs_indonesia = $request->input('bhs_indonesia');
		$nilai->matematika = $request->input('matematika');
		$nilai->ipa = $request->input('ipa');
		$nilai->ips = $request->input('ips');
        $nilai->save();
        $nilai->id;

        return view('nilais.show',['nilai'=>$nilai]);
       // return to_route('nilais.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return to_route('nilais.index');
    }
}
