<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use App\Models\User;
use App\Models\Berita;
use App\Models\Acara;

class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $pendaftarCount = Daftar::count();
        $beritaCount = Berita::count();
        $acaraCount = Acara::count(); // Menghitung jumlah acara

        return view('dashboard', compact('userCount', 'pendaftarCount', 'beritaCount', 'acaraCount'));
    }
}
