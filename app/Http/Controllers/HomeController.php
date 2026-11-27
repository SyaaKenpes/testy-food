<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Berita;
use App\Models\Makanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Halaman Utama (Home)
    public function index()
    {
        $makanans = Makanan::all();
        $beritas = Berita::all();
        $tentang = Profile::first();

        return view('welcome', compact('makanans', 'beritas', 'tentang'));
    }

    // Halaman Berita Publik
    public function berita()
    {
        $beritas = Berita::all();
        return view('berita', compact('beritas'));
    }
}