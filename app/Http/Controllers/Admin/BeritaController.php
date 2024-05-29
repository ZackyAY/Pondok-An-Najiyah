<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('Admin/berita', compact('berita'));
    }


    public function create()
    {
        return view('Admin/Berita/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        } else {
            $imagePath = null;
        }

        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'News created successfully.');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);
    return view('Admin/Berita/view', compact('berita'));
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
