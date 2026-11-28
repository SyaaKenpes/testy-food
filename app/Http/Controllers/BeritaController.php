<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mengambil 1 berita utama (hot news) yang ditandai is_featured = 1
        $mainBerita = Berita::where('is_featured', 1)->first();

        // Mengambil berita pendukung berurutan
        $beritaPendukung = Berita::where('is_featured', 0)
                            ->orderBy('urutan', 'asc')
                            ->take(8)
                            ->get();

        return view('berita', compact('mainBerita', 'beritaPendukung'));
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
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
