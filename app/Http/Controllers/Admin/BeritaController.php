<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // Menampilkan daftar berita di panel admin
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('admin.berita.index', compact('beritas'));
    }

    // Menampilkan form tambah berita
    public function create()
    {
        return view('admin.berita.create');
    }

    // Menyimpan berita baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  
        ]);

        // Upload file ke storage folder 'berita'
        $imgPath = $request->file('img')->store('berita', 'public');

        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'img' => $imgPath,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    // Menampilkan form edit berita
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    // Memperbarui data berita
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ];

        // Jika ada file gambar baru yang diunggah
        if ($request->hasFile('img')) {
            // Hapus file img lama jika ada di storage
            if ($berita->img && Storage::disk('public')->exists($berita->img)) {
                Storage::disk('public')->delete($berita->img);
            }
            $data['img'] = $request->file('img')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    // Menghapus berita
    public function destroy(Berita $berita)
    {
        // Hapus file img dari storage
        if ($berita->img && Storage::disk('public')->exists($berita->img)) {
            Storage::disk('public')->delete($berita->img);
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}