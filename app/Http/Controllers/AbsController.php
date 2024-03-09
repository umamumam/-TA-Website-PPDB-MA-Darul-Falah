<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Ab;
use App\Http\Requests\AbRequest;

class AbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $abs= Ab::all();
        return view('abs.index', ['abs'=>$abs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('abs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AbRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AbRequest $request)
    {
        $ab = new Ab;
		$ab->title = $request->input('title');
		$ab->nama = $request->input('nama');
		$ab->nik = $request->input('nik');
		$ab->content = $request->input('content');
        $ab->save();

        return to_route('abs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $ab = Ab::findOrFail($id);
        return view('abs.show',['ab'=>$ab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $ab = Ab::findOrFail($id);
        return view('abs.edit',['ab'=>$ab]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AbRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AbRequest $request, $id)
    {
        $ab = Ab::findOrFail($id);
		$ab->title = $request->input('title');
		$ab->nama = $request->input('nama');
		$ab->nik = $request->input('nik');
		$ab->content = $request->input('content');
        $ab->save();

        return to_route('abs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $ab = Ab::findOrFail($id);
        $ab->delete();

        return to_route('abs.index');
    }
}
