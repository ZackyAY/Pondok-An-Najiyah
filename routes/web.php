<?php

use App\Http\Controllers\Admin\AcaraController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\DaftarController;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/alumni/{tahun}', [HomeController::class, 'alumniByYear'])->name('home.alumni_by_year');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/pendaftaran', [HomeController::class, 'pendaftaran'])->name('home.pendaftaran');

Route::resource('/admin/berita', BeritaController::class)->names('admin.berita');
Route::resource('/admin/daftar', DaftarController::class)->names('admin.daftar');
Route::resource('/admin/acara', AcaraController::class)->names('admin.acara');
Route::resource('/daftar', DaftarController::class)->names('daftar');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
