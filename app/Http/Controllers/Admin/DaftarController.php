<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Daftar;

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $imagePath = $request->file('image')->storeAs('public/pendaftaran', $imageName);
            } else {
                $imagePath = null;
            }

            $data = Daftar::create([
                'tgl_daftar' => $request->tgl_daftar,
                'th_ajaran' => $request->th_ajaran,
                'nm_peserta' => $request->nm_peserta,
                'tmp_lahir' => $request->tmp_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jk' => $request->jk,
                'almt_peserta' => $request->almt_peserta,
                'image' => $imagePath,
            ]);

            $pdfData = [
                'tgl_daftar' => $data->tgl_daftar,
                'th_ajaran' => $data->th_ajaran,
                'nm_peserta' => $data->nm_peserta,
                'tmp_lahir' => $data->tmp_lahir,
                'tgl_lahir' => $data->tgl_lahir,
                'jk' => $data->jk,
                'almt_peserta' => $data->almt_peserta,
                'image' => $imagePath ? storage_path('app/' . $imagePath) : null, // Path untuk gambar
                'logo' => public_path('assets/sma.png'), // Path ke gambar logo
            ];

            $pdf = PDF::loadView('Admin.Pendaftaran.pdf', $pdfData)->setPaper('A4', 'portrait');
            $pdfFileName = 'pendaftaran_' . time() . '.pdf';
            $pdfPath = 'public/pendaftaran/' . $pdfFileName; // Path penyimpanan PDF di storage/public
            $pdf->save(storage_path('app/' . $pdfPath)); // Simpan PDF di storage

            // Buat URL untuk file PDF
            $pdfUrl = Storage::url($pdfPath);

            return redirect()->route('home.pendaftaran')->with([
                'success' => 'Data successfully stored!',
                'pdf_path' => $pdfUrl,
            ]);
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
        $pendaftaran = Daftar::find($id);

        if ($pendaftaran) {
            if ($pendaftaran->image) {
                $imagePath = public_path('storage/' . $pendaftaran->image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }

            $pendaftaran->delete();
            return redirect()->route('admin.daftar.index')->with('success', 'Data has been deleted');
        } else {
            return redirect()->route('admin.daftar.index')->with('error', 'Data not found');
        }
    }
}