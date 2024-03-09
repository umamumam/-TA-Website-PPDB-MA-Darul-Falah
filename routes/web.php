<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlurController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MediaController;

use App\Http\Controllers\PpdbsController;
use App\Http\Middleware\CheckAdminAccess;
use App\Http\Controllers\NilaisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserpenController;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\SiswaPanel\SiswaController;
use App\Http\Controllers\AdminPanel\AdminppdbController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/p', function () {
    return view('nyoba');
});

Route::get('/dashboard', [SiswaController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
//Route::get('/alur', [SiswaController::class, 'alur'])->middleware(['auth', 'verified'])->name('alur');
Route::resource('/alur', \App\Http\Controllers\AlurController::class);
Route::get('/info', function () {
    return view('info');
});
Route::get('/rapot', function () {
    return view('rapot');
});
Route::get('/eror', function () {
    return view('eror');
})->name('eror');


Route::middleware('auth')->group(function () {
    //Route::resource('/userpen', UserpenController::class);
    //Route::get('userpen/{userpen}', 'UserpenController@show')->name('userpen.show');
    //Route::resource('/ppdbs', \App\Http\Controllers\PpdbsController::class);
    //Route::resource('/nilais', \App\Http\Controllers\NilaisController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});
Route::resource('/posts', \App\Http\Controllers\PostsController::class);
require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/alur', [AlurController::class, 'admin'])->name('admin.alur');
    //Route::resource('admin/ppdbs', PpdbsController::class)->middleware('auth:admin');
    Route::resource('admin/ppdbs', \App\Http\Controllers\PpdbsController::class);
    Route::resource('admin/validasis', \App\Http\Controllers\ValidasisController::class);
    Route::resource('admin/nilais', \App\Http\Controllers\NilaisController::class);
    Route::get('admin/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
    // Penambahan rute lainnya jika diperlukan
});

Route::resource('/abs', \App\Http\Controllers\AbsController::class);
//Route::middleware(['auth', 'verified'])->group(function () {
//    Route::get('/ppdbs', [PpdbsController::class, 'admin'])->name('admin.ppdbs.index-user');
//});

// Route untuk pengguna lain atau default

//Route::get('/ppdbs', [PpdbsController::class, 'admin'])->name('admin.ppdbs.index-user');
Route::resource('/ppdbs', \App\Http\Controllers\PpdbsController::class);

Route::get('/ppdbs-export', [PpdbsController::class, 'export']);
Route::resource('/nilais', \App\Http\Controllers\NilaisController::class);
Route::resource('/validasis', \App\Http\Controllers\ValidasisController::class);
Route::get('/user', [\App\Http\Controllers\ValidasisController::class, 'user']);
Route::get('/search', [\App\Http\Controllers\ValidasisController::class, 'search']);
Route::get('/nilais-export', [NilaisController::class, 'export']);

Route::resource('/upload', \App\Http\Controllers\UploadController::class);
//Route::get('/media/create', [MediaController::class, 'create'])->name('media.create');
//Route::post('/media/store', [MediaController::class, 'store'])->name('media.store');
//Route::get('generate-pdf', [App\Http\Controllers\PdfController::class, 'generatePdf']);
Route::get('/export-pdf', [PpdbsController::class, 'exportPDF']);

Route::get('/upload', [FileController::class, 'showUploadForm'])->name('upload.form');
Route::post('/upload', [FileController::class, 'upload'])->name('upload');
Route::delete('/file/{id}', [FileController::class, 'delete'])->name('file.delete');
Route::get('/searchup', [FileController::class, 'search'])->name('search');
Route::get('/upl', [FileController::class, 'upl'])->name('upload.form');


Route::resource('/users', \App\Http\Controllers\UserController::class);
// Route::get('/role', [UserController::class, 'index'])->name('users.index');
// Route::get('/role/create', [UserController::class, 'create'])->name('users.create');
// Route::post('/role', [UserController::class, 'store'])->name('users.store');
// Route::get('/role/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::put('/role/{user}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/role/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::middleware([CheckAdminAccess::class])->group(function () {
    // Tambahkan rute yang memerlukan otorisasi admin di sini
    Route::resource('/users', \App\Http\Controllers\UserController::class);
});