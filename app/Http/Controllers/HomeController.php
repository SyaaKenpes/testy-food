<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Makanan;

class HomeController extends Controller
{
    public function index()
        {
            $makanans = Makanan::all();
            $beritas = Berita::all();
        
            return view('welcome', compact('makanans', 'beritas'));
    }
}
