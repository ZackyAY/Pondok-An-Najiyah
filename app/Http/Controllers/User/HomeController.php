<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Acara;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::all();
        $acara = Acara::all();

        return view('User/home', compact('berita','acara'));
    }
    public function about()
    {
        return view('User/about');
    }
    public function alumni()
    {
        return view('User/alumni');
    }
    public function contact()
    {
        return view('User/contact');
    }
    public function pendaftaran()
    {
        return view('User/pendaftaran');
    }

    public function readmoreBerita()
    {
        $berita = Berita::all();

        return view('User/readmoreBerita', compact('berita'));
    }
    public function readmoreAcara()
    {
        $acara = Acara::all();

        return view('User/readmoreAcara', compact('acara'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
