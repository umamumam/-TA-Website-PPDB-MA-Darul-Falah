<?php

namespace App\Http\Controllers;

use App\Models\Validasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidasiRequest;


class ValidasisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $validasis= Validasi::all();
        return view('validasis.index', ['validasis'=>$validasis]);
    }
    public function user()
{
    $validasis = Validasi::select('id', 'nisn', 'nama_peserta', 'status')->get();
    return view('validasis.user', ['validasis' => $validasis]);
}


    public function search(Request $request)
{
    $keyword = $request->input('keyword');
    $validasis = Validasi::where('nama_peserta', 'like', "%$keyword%")->get();
    $count = $validasis->count();

    if ($count === 0) {
        // Notifikasi jika data tidak ditemukan
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }

    return view('validasis.user', compact('validasis', 'keyword'));
}


    public function searche(Request $request)
    {
        $keyword = $request->search;
        $results = Validasi::where('nama', 'like', '%' .$keyword. '%')->get();
        return view('result', [
            'keyword' => $keyword,
            'validasi' => $results
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('validasis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ValidasiRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ValidasiRequest $request)
    {
        $validasi = new Validasi;
		$validasi->nisn = $request->input('nisn');
		$validasi->nama_peserta = $request->input('nama_peserta');
		$validasi->email_wa = $request->input('email_wa');
		$validasi->status = $request->input('status');
        $validasi->save();

        return to_route('validasis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $validasi = Validasi::findOrFail($id);
        return view('validasis.show',['validasi'=>$validasi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $validasi = Validasi::findOrFail($id);
        return view('validasis.edit',['validasi'=>$validasi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ValidasiRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ValidasiRequest $request, $id)
    {
        $validasi = Validasi::findOrFail($id);
		$validasi->nisn = $request->input('nisn');
		$validasi->nama_peserta = $request->input('nama_peserta');
		$validasi->email_wa = $request->input('email_wa');
		$validasi->status = $request->input('status');
        $validasi->save();

        return to_route('validasis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $validasi = Validasi::findOrFail($id);
        $validasi->delete();

        return to_route('validasis.index');
    }
}
