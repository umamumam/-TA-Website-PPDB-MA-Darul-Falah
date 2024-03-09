<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Ppdb;
use App\Exports\PpdbExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\PpdbRequest;

class UserpenController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $ppdbs= Ppdb::all();
        return view('userpen.index', ['ppdbs'=>$ppdbs]);
    }
    
    public function export() 
    {
        return Excel::download(new PpdbExport, 'ppdbs-'.Carbon::now()->timestamp.'.xlsx');
        
    }
    public function exportPDF()
    {
        $ppdbs = Ppdb::all();
        $pdf = Pdf::loadView('pdf.export-ppdb', ['ppdbs'=> $ppdbs]);
        return $pdf->download('export-ppdb.pdf');
    }
    public function admin()
    {
        return view('admin.ppdbs.index-user');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('userpen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PpdbRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PpdbRequest $request)
    {
        $ppdb = new Ppdb;
		$ppdb->nisn = $request->input('nisn');
		$ppdb->nik_peserta = $request->input('nik_peserta');
		$ppdb->nm_peserta = $request->input('nm_peserta');
		$ppdb->jenis_kelamin = $request->input('jenis_kelamin');
		$ppdb->tmpt_lahir = $request->input('tmpt_lahir');
		$ppdb->tgl_lahir = $request->input('tgl_lahir');
		$ppdb->anak_ke = $request->input('anak_ke');
		$ppdb->no_kk = $request->input('no_kk');
		$ppdb->nik_ayah = $request->input('nik_ayah');
		$ppdb->nama_ayah = $request->input('nama_ayah');
		$ppdb->pend_ayah = $request->input('pend_ayah');
		$ppdb->pek_ayah = $request->input('pek_ayah');
		$ppdb->nik_ibu = $request->input('nik_ibu');
		$ppdb->nama_ibu = $request->input('nama_ibu');
		$ppdb->nama_ibu = $request->input('nama_ibu');
		$ppdb->pend_ibu = $request->input('pend_ibu');
		$ppdb->pek_ibu = $request->input('pek_ibu');
		$ppdb->telp_peserta = $request->input('telp_peserta');
		$ppdb->telp_ortu = $request->input('telp_ortu');
		$ppdb->alamat_peserta = $request->input('alamat_peserta');
		$ppdb->kode_pos = $request->input('kode_pos');
		$ppdb->asal_sekolah = $request->input('asal_sekolah');
		$ppdb->npsn = $request->input('npsn');
		$ppdb->nsm = $request->input('nsm');
		$ppdb->alamat_sekolah = $request->input('alamat_sekolah');
		$ppdb->kriteria_peserta = $request->input('kriteria_peserta');
		$ppdb->peminatan = $request->input('peminatan');
		$ppdb->no_kip = $request->input('no_kip');
		$ppdb->no_kks = $request->input('no_kks');
		$ppdb->no_pkh = $request->input('no_pkh');
		$ppdb->tgl_daftar = $request->input('tgl_daftar');
        $ppdb->save();
        $ppdb->id;
        
        return redirect()->route('userpen.show', ['ppdb' => $ppdb->id]);
        //return view('userpen.show',['userpen'=>$ppdb]);
        //return to_route('ppdbs.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $ppdb = Ppdb::findOrFail($id);
        return view('userpen.show',['ppdb'=>$ppdb]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $ppdb = Ppdb::findOrFail($id);
        return view('userpen.edit',['ppdb'=>$ppdb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  PpdbRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PpdbRequest $request, $id)
    {
        $ppdb = Ppdb::findOrFail($id);
		$ppdb->nisn = $request->input('nisn');
		$ppdb->nik_peserta = $request->input('nik_peserta');
		$ppdb->nm_peserta = $request->input('nm_peserta');
		$ppdb->jenis_kelamin = $request->input('jenis_kelamin');
		$ppdb->tmpt_lahir = $request->input('tmpt_lahir');
		$ppdb->tgl_lahir = $request->input('tgl_lahir');
		$ppdb->anak_ke = $request->input('anak_ke');
		$ppdb->no_kk = $request->input('no_kk');
		$ppdb->nik_ayah = $request->input('nik_ayah');
		$ppdb->nama_ayah = $request->input('nama_ayah');
		$ppdb->pend_ayah = $request->input('pend_ayah');
		$ppdb->pek_ayah = $request->input('pek_ayah');
		$ppdb->nik_ibu = $request->input('nik_ibu');
		$ppdb->nama_ibu = $request->input('nama_ibu');
		$ppdb->nama_ibu = $request->input('nama_ibu');
		$ppdb->pend_ibu = $request->input('pend_ibu');
		$ppdb->pek_ibu = $request->input('pek_ibu');
		$ppdb->telp_peserta = $request->input('telp_peserta');
		$ppdb->telp_ortu = $request->input('telp_ortu');
		$ppdb->alamat_peserta = $request->input('alamat_peserta');
		$ppdb->kode_pos = $request->input('kode_pos');
		$ppdb->asal_sekolah = $request->input('asal_sekolah');
		$ppdb->npsn = $request->input('npsn');
		$ppdb->nsm = $request->input('nsm');
		$ppdb->alamat_sekolah = $request->input('alamat_sekolah');
		$ppdb->kriteria_peserta = $request->input('kriteria_peserta');
		$ppdb->peminatan = $request->input('peminatan');
		$ppdb->no_kip = $request->input('no_kip');
		$ppdb->no_kks = $request->input('no_kks');
		$ppdb->no_pkh = $request->input('no_pkh');
		$ppdb->tgl_daftar = $request->input('tgl_daftar');
        $ppdb->save();
        $ppdb->id;
        return view('userpen.show',['ppdb'=>$ppdb]);
        //return to_route('ppdbs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $ppdb = Ppdb::findOrFail($id);
        $ppdb->delete();
    
        return redirect()->route('userpen.index');
    }
}
