<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Acara;

class AcaraController extends Controller
{
    public function index()
    {
        $acara = Acara::all();
        return view('Admin/acara', compact('acara'));
    }

    public function create()
    {
        return view('Admin/Acara/create');
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

        Acara::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.acara.index')->with('success', 'Acara berhasil dibuat.');
    }

    public function show($id)
    {
        $acara = Acara::findOrFail($id);
        return view('Admin/Acara/view', compact('acara'));
    }

    public function edit($id)
    {
        $acara = Acara::findOrFail($id);
        return view('Admin/Acara/edit', compact('acara'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $acara = Acara::findOrFail($id);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
            $acara->image = $imagePath;
        }

        $acara->judul = $request->judul;
        $acara->deskripsi = $request->deskripsi;
        $acara->save();

        return redirect()->route('admin.acara.index')->with('success', 'Acara berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $acara = Acara::findOrFail($id);
        $acara->delete();

        return redirect()->route('admin.acara.index')->with('success', 'Acara berhasil dihapus.');
    }
}
