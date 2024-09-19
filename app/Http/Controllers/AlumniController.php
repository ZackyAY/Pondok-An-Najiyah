<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade
use App\Models\Alumni; // Pastikan Anda menggunakan model yang sesuai

class AlumniController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'tahun_lulus' => 'required',
        'tahun_pelajaran' => 'required',
        'link' => 'required|url',
    ]);

    Alumni::create([
        'tahun_lulus' => $request->tahun_lulus,
        'tahun_pelajaran' => $request->tahun_pelajaran,
        'link' => $request->link,
    ]);

    return redirect()->back()->with('success', 'Data alumni berhasil ditambahkan!');
}

    public function show2023()
    {
        $alumni = DB::table('alumni')
                    ->where('tahun_lulus', '2023')
                    ->get();

        return view('user.alumni.2023', ['alumni' => $alumni]);
    }
}
