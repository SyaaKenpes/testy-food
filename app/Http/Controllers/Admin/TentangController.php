<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    // Menampilkan data tentang (mengambil baris pertama dari tabel profiles)
    public function index()
    {
        $tentang = Profile::first();
        return view('admin.tentang', compact('tentang'));
    }

    // Memperbarui data tentang
    public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        'visi_deskripsi' => 'required',
        'visi_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        'misi_deskripsi' => 'required',
        'misi_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
    ]);

    $tentang = Profile::findOrFail($id);

    $data = [
        'judul' => $request->judul,
        'deskripsi' => $request->deskripsi,
        'visi_deskripsi' => $request->visi_deskripsi,
        'misi_deskripsi' => $request->misi_deskripsi,
    ];

    // Jika ada upload foto profil utama baru
    if ($request->hasFile('img')) {
        if ($tentang->img && Storage::disk('public')->exists($tentang->img)) {
            Storage::disk('public')->delete($tentang->img);
        }
        $data['img'] = $request->file('img')->store('tentang', 'public');
    }

    // Jika ada upload foto visi baru
    if ($request->hasFile('visi_img')) {
        if ($tentang->visi_img && Storage::disk('public')->exists($tentang->visi_img)) {
            Storage::disk('public')->delete($tentang->visi_img);
        }
        $data['visi_img'] = $request->file('visi_img')->store('tentang', 'public');
    }

    // Jika ada upload foto misi baru
    if ($request->hasFile('misi_img')) {
        if ($tentang->misi_img && Storage::disk('public')->exists($tentang->misi_img)) {
            Storage::disk('public')->delete($tentang->misi_img);
        }
        $data['misi_img'] = $request->file('misi_img')->store('tentang', 'public');
    }

    $tentang->update($data);

    return redirect()->route('admin.tentang.index')->with('success', 'Halaman Tentang berhasil diperbarui!');
}   
}