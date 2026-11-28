@extends('admin.layouts.app')

@section('header-title', 'Kelola Galeri')

@section('content')
    <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-12">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-xl font-bold text-gray-900">Daftar Galeri Makanan</h2>
                <p class="text-sm text-gray-500 mt-1">Kelola foto-foto galeri yang tampil di halaman Home dan Galeri.</p>
            </div>
            <a href="{{ route('admin.galeri.create') }}"
                class="bg-amber-500 hover:bg-amber-600 text-black font-bold px-5 py-2.5 rounded-xl transition shadow-md flex items-center space-x-2">
                <span>+ Tambah Galeri Baru</span>
            </a>
        </div>


        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-gray-200 text-gray-400 text-xs font-semibold uppercase tracking-wider">
                        <th class="py-3 px-4">No</th>
                        <th class="py-3 px-4">Gambar</th>
                        <th class="py-3 px-4">Judul / Keterangan</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                    @forelse ($galeris as $index => $galeri)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="py-4 px-4 font-medium text-gray-500">{{ $index + 1 }}</td>
                            <td class="py-4 px-4">
                                <img src="{{ asset($galeri->img) }}" alt="{{ $galeri->judul }}"
                                    class="w-20 h-14 object-cover rounded-lg shadow-sm border border-gray-200">
                            </td>
                            <td class="py-4 px-4 font-semibold text-gray-900">{{ $galeri->judul }}</td>
                            <td class="py-4 px-4 text-center space-x-3">
                                <a href="{{ route('admin.galeri.edit', $galeri->id) }}"
                                    class="text-amber-600 hover:text-amber-800 font-semibold">Edit</a>
                                <form action="{{ route('admin.galeri.destroy', $galeri->id) }}" method="POST"
                                    class="inline-block"
                                    onsubmit="return confirm('Yakin ingin menghapus foto galeri ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-500 hover:text-red-700 font-semibold cursor-pointer">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-8 text-gray-400 italic">Belum ada data galeri makanan.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
