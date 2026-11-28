<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // Menampilkan daftar galeri di panel admin
    public function index()
    {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri.index', compact('galeris'));
    }

    // Menampilkan form tambah galeri
    public function create()
    {
        return view('admin.galeri.create');
    }

    // Menyimpan galeri baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $imagePath = null;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/galeri'), $filename);
            $imagePath = 'img/galeri/' . $filename;
        }

        Galeri::create([
            'judul' => $request->judul,
            'img' => $imagePath,
        ]);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil ditambahkan!');
    }

    // Menampilkan form edit galeri
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    // Memperbarui data galeri
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $galeri = Galeri::findOrFail($id);

        $data = [
            'judul' => $request->judul,
        ];

        // Jika ada upload gambar baru
        if ($request->hasFile('img')) {
            // Hapus file gambar lama dari folder public jika ada
            if ($galeri->img && file_exists(public_path($galeri->img))) {
                unlink(public_path($galeri->img));
            }

            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/galeri'), $filename);
            $data['img'] = 'img/galeri/' . $filename;
        }

        $galeri->update($data);

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil diperbarui!');
    }

    // Menghapus galeri
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus file fisik gambar dari folder public
        if ($galeri->img && file_exists(public_path($galeri->img))) {
            unlink(public_path($galeri->img));
        }

        $galeri->delete();

        return redirect()->route('admin.galeri.index')->with('success', 'Galeri berhasil dihapus!');
    }
}