<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    // Menampilkan halaman Tentang Kami publik
    public function index()
    {
        // Ambil data pertama dari tabel profiles
        $tentang = Profile::first();

        // Kirim data ke view 'tentang'
        return view('tentang', compact('tentang'));
    }
}