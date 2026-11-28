@extends('admin.layouts.app')

@section('header-title', 'Kelola Halaman Tentang')

@section('content')
    <div class="max-w-4xl bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-12">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-900">Kelola Konten Halaman Tentang Kami</h2>
            <p class="text-sm text-gray-500 mt-1">Sesuaikan teks profil utama, visi, dan misi.</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-600 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @isset($tentang)
            <form action="{{ route('admin.tentang.update', $tentang->id) }}" method="POST" class="space-y-8">
                @csrf

                <!-- Bagian Profil Utama -->
                <div class="p-6 bg-gray-50 rounded-2xl border border-gray-200 space-y-4">
                    <h3 class="text-lg font-bold text-gray-800 border-b pb-2">1. Bagian Profil Utama</h3>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Judul Utama</label>
                        <input type="text" name="judul" value="{{ old('judul', $tentang->judul) }}" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi Profil</label>
                        <textarea name="deskripsi" rows="4" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">{{ old('deskripsi', $tentang->deskripsi) }}</textarea>
                    </div>
                </div>

                <!-- Bagian Visi -->
                <div class="p-6 bg-gray-50 rounded-2xl border border-gray-200 space-y-4">
                    <h3 class="text-lg font-bold text-gray-800 border-b pb-2">2. Bagian Visi</h3>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi Visi</label>
                        <textarea name="visi_deskripsi" rows="4" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">{{ old('visi_deskripsi', $tentang->visi_deskripsi) }}</textarea>
                    </div>
                </div>

                <!-- Bagian Misi -->
                <div class="p-6 bg-gray-50 rounded-2xl border border-gray-200 space-y-4">
                    <h3 class="text-lg font-bold text-gray-800 border-b pb-2">3. Bagian Misi</h3>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi Misi</label>
                        <textarea name="misi_deskripsi" rows="4" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">{{ old('misi_deskripsi', $tentang->misi_deskripsi) }}</textarea>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="bg-amber-500 hover:bg-amber-600 text-black font-bold px-6 py-3 rounded-xl transition transform hover:scale-105 shadow-md cursor-pointer">
                        Simpan Seluruh Perubahan
                    </button>
                </div>
            </form>
        @else
            <p class="text-gray-500 italic">Data profil belum tersedia di database.</p>
        @endisset
    </div>
@endsection
