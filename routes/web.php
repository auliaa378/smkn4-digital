<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Models\Artikel;
use App\Models\Galeri;
use App\Http\Middleware\TrackVisitor;


// ============================================================
// HOME
// ============================================================

Route::get('/', function () {

    // 3 artikel terbaru
    $artikels = Artikel::latest('tanggal')
        ->take(3)
        ->get();

    // 4 galeri terbaru yang aktif
    $galeris = Galeri::where('status', 'Aktif')
        ->latest()
        ->take(4)
        ->get();

    return view('user.home', compact(
        'artikels',
        'galeris'
    ));

})->middleware(TrackVisitor::class)->name('home');


// ============================================================
// PROFIL
// ============================================================

Route::get('/profil', function () {
    return view('user.profil');
});


// ============================================================
// ARTIKEL USER
// ============================================================

Route::get('/artikel', function () {

    $artikels = Artikel::latest('tanggal')
        ->get();

    return view('user.artikel', compact('artikels'));

})->middleware(TrackVisitor::class)->name('artikel');


// ============================================================
// DETAIL ARTIKEL
// ============================================================

Route::get('/detail-artikel/{id}', function ($id) {

    $artikel = Artikel::findOrFail($id);

    return view('user.detail-artikel', compact('artikel'));

})->middleware(TrackVisitor::class)->name('detail.artikel');


// ============================================================
// GALERI USER
// ============================================================

Route::get('/galeri', function () {

    $query = Galeri::where('status', 'Aktif');

    if (request('kategori')) {
        $query->where('kategori', request('kategori'));
    }

    $galeris = $query->latest()->get();

    return view('user.galeri', compact('galeris'));

})->middleware(TrackVisitor::class)->name('galeri');


// ============================================================
// DETAIL JURUSAN
// ============================================================

Route::get('/detail-jurusan-pplg', function () {
    return view('user.detail-jurusan-pplg');
})->name('detail.pplg');


Route::get('/detail-jurusan-tjkt', function () {
    return view('user.detail-jurusan-tjkt');
})->name('detail.tjkt');


Route::get('/detail-jurusan-tpfl', function () {
    return view('user.detail-jurusan-tpfl');
})->name('detail.tpfl');


Route::get('/detail-jurusan-tkro', function () {
    return view('user.detail-jurusan-tkro');
})->name('detail.tkro');


// ============================================================
// LOGIN ADMIN
// ============================================================

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


// ============================================================
// ADMIN
// ============================================================

Route::middleware('auth')->group(function () {

    // ========================================================
    // DASHBOARD
    // ========================================================

    Route::get('/admin/dashboard', function () {

        $totalArtikel = Artikel::count();

        $totalGaleri = Galeri::count();

        $totalPengguna = \App\Models\User::count();

        return view('admin.dashboard', compact(
            'totalArtikel',
            'totalGaleri',
            'totalPengguna'
        ));

    })->name('admin.dashboard');


    // ========================================================
    // ARTIKEL ADMIN
    // ========================================================

    Route::resource('/admin/artikel', ArtikelController::class)
        ->names('admin.artikel');


    // ========================================================
    // GALERI ADMIN
    // ========================================================

    Route::get('/admin/galeri', [GaleriController::class, 'index'])
        ->name('admin.galeri.index');

    Route::get('/admin/galeri/tambah', [GaleriController::class, 'create'])
        ->name('admin.galeri.create');

    Route::post('/admin/galeri', [GaleriController::class, 'store'])
        ->name('admin.galeri.store');

    Route::get('/admin/galeri/{galeri}/edit', [GaleriController::class, 'edit'])
        ->name('admin.galeri.edit');

    Route::put('/admin/galeri/{galeri}', [GaleriController::class, 'update'])
        ->name('admin.galeri.update');

    Route::delete('/admin/galeri/{galeri}', [GaleriController::class, 'destroy'])
        ->name('admin.galeri.destroy');


    // ========================================================
    // PENGGUNA ADMIN
    // ========================================================

    Route::resource('/admin/pengguna', PenggunaController::class)
        ->names('admin.pengguna');


    // ========================================================
    // HALAMAN KONFIRMASI KELUAR
    // ========================================================

    Route::get('/admin/keluar', function () {
        return view('admin.keluar');
    })->name('admin.keluar');


    // ========================================================
    // LOGOUT
    // ========================================================

    Route::post('/logout', function () {

        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('home');

    })->name('logout');

});


// ============================================================
// RESET LOGIN
// ============================================================

Route::get('/reset-login', function () {

    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect()->route('home');

});


// ============================================================
// AUTH ROUTES BREEZE
// ============================================================

require __DIR__.'/auth.php';