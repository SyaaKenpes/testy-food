<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Makanan;

class HomeController extends Controller
{
    // Halaman Utama (Home)
    public function index()
    {
        $makanans = Makanan::all();
        $beritas = Berita::all();
    
        return view('welcome', compact('makanans', 'beritas'));
    }

    // Halaman Tentang Kami
    public function tentang()
    {
        return view('tentang');
    }

    // Halaman Berita (Data berita dikirim juga ke halaman berita)
    public function berita()
    {
        $beritas = Berita::all();
        
        return view('berita', compact('beritas'));
    }

    // Halaman Galeri
    public function galeri()
    {
        return view('galeri');
    }

    // Halaman Kontak
    public function kontak()
    {
        return view('kontak');
    }
}
