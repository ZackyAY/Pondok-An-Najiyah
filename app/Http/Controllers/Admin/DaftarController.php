<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Daftar;
use Illuminate\Support\Facades\Log;

class DaftarController extends Controller
{
    public function index()
    {
        $pendaftaran = Daftar::all();
        return view('Admin/pendaftaran', compact('pendaftaran'));
    }


    public function create()
    {
        // return view('Admin/Berita/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'th_ajaran' => 'required',
            'tgl_daftar' => 'required',
            'nm_peserta' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'almt_peserta' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images/pendaftaran/'), $imageName);
                $imagePath = 'images/pendaftaran/' . $imageName;
            } else {
                $imagePath = null;
            }

            Daftar::create([
                'tgl_daftar' => $request->tgl_daftar,
                'th_ajaran' => $request->th_ajaran,
                'nm_peserta' => $request->nm_peserta,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jk' => $request->jk,
                'almt_peserta' => $request->almt_peserta,
                'image' => $imagePath,
            ]);

            return redirect()->route('home.index')->with('success', 'Data created successfully.');
        } catch (\Exception $e) {
            Log::error('Error in store method: ' . $e->getMessage());
            return redirect()->back()->withErrors('There was an error while storing the data.');
        }
    }

    public function show($id)
    {
        $pendaftaran = Daftar::findOrFail($id);
    return view('Admin/Pendaftaran/view', compact('pendaftaran'));
    }

    public function edit($id)
    {
        // Edit a single user
    }

    public function update(Request $request, $id)
    {
        // Update user information
    }

    public function destroy($id)
    {
        // Delete a user
    }
}
