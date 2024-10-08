<?php

use App\Http\Controllers\Admin\AcaraController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\DaftarController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlumniController;



Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/alumni', [HomeController::class, 'alumni'])->name('home.alumni');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/pendaftaran', [HomeController::class, 'pendaftaran'])->name('home.pendaftaran');
Route::get('/readmore-berita', [HomeController::class, 'readmoreBerita'])->name('home.readmoreBerita');
Route::get('/readmore-acara', [HomeController::class, 'readmoreAcara'])->name('home.readmoreAcara');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/alumni-2023-annajiyah', [AlumniController::class, 'show2023'])->name('alumni.2023');

Route::resource('/admin/berita', BeritaController::class)->names('admin.berita');
Route::resource('/admin/daftar', DaftarController::class)->names('admin.daftar');
Route::resource('/admin/acara', AcaraController::class)->names('admin.acara');

Route::resource('/daftar', DaftarController::class)->names('daftar');
Route::get('/download-pdf', [DaftarController::class, 'downloadPdf'])->name('admin.download');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/admin/administrator/create', [RegisteredUserController::class, 'add'])->name('administrator.create');
    Route::post('/admin/administrator/create', [RegisteredUserController::class, 'tambah']);
    Route::get('/auth/register', [RegisteredUserController::class, 'create'])->name('auth.register');
});

require __DIR__.'/auth.php';