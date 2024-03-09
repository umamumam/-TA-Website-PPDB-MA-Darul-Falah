<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\UserController;

class CheckAdminAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna adalah admin
        if ($request->user() && $request->user()->email === 'adminppdb@gmail.com') {
            return $next($request);
        }

        // Jika bukan admin, arahkan ke halaman lain atau kembalikan kesalahan
        return redirect()->route('eror')->with('error', 'Unauthorized access');
        
    }
}
