<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Halaman Utama (Home)
    public function index()
    {
        // Mengambil maksimal 8 galeri terbaru untuk halaman Home
        $makanans = Galeri::latest()->take(8)->get();
        $tentang = Profile::first();

        // Mengambil 1 berita utama (hot news)
        $mainBerita = Berita::where('is_featured', 1)->first();

        // Mengambil 4 berita pendukung berurutan
        $beritaPendukung = Berita::where('is_featured', 0)
                            ->orderBy('urutan', 'asc')
                            ->take(4)
                            ->get();

        return view('welcome', compact('makanans', 'mainBerita', 'beritaPendukung', 'tentang'));
    }

    // Halaman Berita Publik
    public function berita()
    {
        $mainBerita = Berita::where('is_featured', 1)->first();
        $beritaPendukung = Berita::where('is_featured', 0)
                            ->orderBy('urutan', 'asc')
                            ->take(4)
                            ->get();

        return view('berita', compact('mainBerita', 'beritaPendukung'));
    }
}