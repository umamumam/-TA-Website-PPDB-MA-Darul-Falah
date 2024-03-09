<?php

namespace App\Http\Controllers\SiswaPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SiswaController extends Controller
{
    public function dashboard()
    {
        if(Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return view ('dashboard');
    }
    public function alur()
    {
        if(Auth::user()->role === 'admin') {
            return redirect()->route('admin.alur');
        }

        return view ('alur');
    }
    
}
