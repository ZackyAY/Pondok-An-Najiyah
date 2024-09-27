<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import DB facade
use App\Models\Alumni; // Pastikan Anda menggunakan model yang sesuai

class AlumniController extends Controller
{

    public function index()
    {
        $alumni = DB::select('SELECT * FROM alumni');
        return view('Admin/Alumni/view', compact('alumni'));
    }

    public function create(){
        return view('Admin/Alumni/create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'nis' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'kelas_asal' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
            'tahun_lulus' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoPath = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('images'), $fotoPath); 
        }

        // Insert the data into the database with DB::insert
        $tambah = DB::insert('INSERT INTO alumni (nis, nama, kelas_asal, foto, tahun_lulus, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)', [
            $request->nis,
            $request->nama,
            $request->kelas_asal,
            $fotoPath, 
            $request->tahun_lulus,
            now(),
            now()
        ]);

        // dd($tambah);

        // Redirect back with success message
        return redirect()->route('admin.alumni.index')->with('success', 'Alumni created successfully.');
    }

    public function show2023()
    {
        $alumni = DB::table('alumni')
            ->where('tahun_lulus', '2023')
            ->get();

        return view('user.alumni.2023', ['alumni' => $alumni]);
    }
}
