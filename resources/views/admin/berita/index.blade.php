@extends('admin.layouts.app')

@section('header-title', 'Kelola Berita')

@section('content')
<div class="max-w-7xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-12">
    <div class="flex justify-between items-center mb-6">
        <div>
            <h2 class="text-xl font-bold text-gray-900">Daftar Berita Tasty Food</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola berita utama (hot news) dan berita pendukung di sini.</p>
        </div>
        <a href="{{ route('admin.berita.create') }}" 
            class="bg-amber-500 hover:bg-amber-600 text-black font-bold px-5 py-2.5 rounded-xl transition shadow-md transition-transform duration-300 hover:scale-105">
            + Tambah Berita Baru
        </a>
    </div>


    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b border-gray-200 text-gray-400 text-xs uppercase tracking-wider">
                    <th class="py-3 px-4">No</th>
                    <th class="py-3 px-4">Gambar</th>
                    <th class="py-3 px-4">Judul Berita</th>
                    <th class="py-3 px-4 text-center">Status Utama</th>
                    <th class="py-3 px-4 text-center">Urutan Pendukung</th>
                    <th class="py-3 px-4 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 text-sm">
                @forelse($beritas as $index => $berita)
                <tr class="hover:bg-gray-50">
                    <td class="py-4 px-4 text-gray-500">{{ $index + 1 }}</td>
                    <td class="py-4 px-4">
                        <img src="{{ asset($berita->img) }}" alt="" class="w-16 h-12 object-cover rounded-lg shadow-sm">
                    </td>
                    <td class="py-4 px-4 font-semibold text-gray-800">{{ $berita->judul }}</td>
                    <td class="py-4 px-4 text-center">
                        @if($berita->is_featured == 1)
                            <span class="bg-red-100 text-red-600 text-xs font-bold px-3 py-1 rounded-full">Hot News (Utama)</span>
                        @else
                            <span class="bg-amber-100 text-amber-700 text-xs font-semibold px-3 py-1 rounded-full">Pendukung</span>
                        @endif
                    </td>
                    <td class="py-4 px-4 text-center font-bold text-gray-700">
                        {{ $berita->urutan ?? '-' }}
                    </td>
                    <td class="py-4 px-4 text-center space-x-2">
                        <a href="{{ route('admin.berita.edit', $berita->id) }}" class="text-amber-600 hover:text-amber-800 font-semibold">Edit</a>
                        <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-8 text-gray-400">Belum ada data berita.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection