<?php

namespace App\Http\Controllers\AdminPanel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminppdbController extends Controller
{
    public function adminppdb()
    {
        if(Auth::user()->role === 'admin') {
            return redirect()->route('admin.ppdbs.index');
        }

        return view ('ppdbs.index');
    }
}
