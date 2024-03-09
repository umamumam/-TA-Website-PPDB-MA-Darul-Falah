<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('alur');
    }
    public function admin()
    {
        return view('admin.alur');
    }
    public function info()
    {
        return view('info');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
