<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    // Menampilkan daftar semua berita di panel admin
    public function index()
    {
        $beritas = Berita::orderBy('is_featured', 'desc')->orderBy('urutan', 'asc')->get();
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
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'is_featured' => 'nullable|boolean',
            'urutan' => 'nullable|integer|min:1|max:4',
        ]);

        // Jika berita ini diset sebagai featured (utama), pastikan berita featured sebelumnya di-reset jadi 0
        if ($request->has('is_featured') && $request->is_featured == 1) {
            Berita::where('is_featured', 1)->update(['is_featured' => 0]);
        }

        $imagePath = null;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/berita'), $filename);
            $imagePath = 'img/berita/' . $filename;
        }

        Berita::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'img' => $imagePath,
            'is_featured' => $request->has('is_featured') ? 1 : 0,
            'urutan' => $request->urutan,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    // Menampilkan form edit berita
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }

    // Memperbarui berita di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'is_featured' => 'nullable|boolean',
            'urutan' => 'nullable|integer|min:1|max:4',
        ]);

        $berita = Berita::findOrFail($id);

        // Jika berita ini diset sebagai featured, reset berita featured lainnya
        if ($request->has('is_featured') && $request->is_featured == 1) {
            Berita::where('id', '!=', $id)->where('is_featured', 1)->update(['is_featured' => 0]);
        }

        $data = [
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'is_featured' => $request->has('is_featured') ? 1 : 0,
            'urutan' => $request->has('is_featured') ? null : $request->urutan, // Jika jadi hot news, urutan kosongkan
        ];

        // Jika ada upload gambar baru
        if ($request->hasFile('img')) {
            if ($berita->img && file_exists(public_path($berita->img))) {
                unlink(public_path($berita->img));
            }
            
            $file = $request->file('img');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img/berita'), $filename);
            $data['img'] = 'img/berita/' . $filename;
        }

        // Eksekusi update ke database
        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui!');
    }

    // Menghapus berita
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->img && file_exists(public_path($berita->img))) {
            unlink(public_path($berita->img));
        }

        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}