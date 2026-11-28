@extends('admin.layouts.app')

@section('header-title', 'Tambah Galeri')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-12">
    <div class="mb-6">
        <h2 class="text-xl font-bold text-gray-900">Tambah Foto Galeri Baru</h2>
        <p class="text-sm text-gray-500 mt-1">Unggah foto makanan baru untuk ditampilkan di website.</p>
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

    <form action="{{ route('admin.galeri.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Judul / Keterangan Foto</label>
            <input type="text" name="judul" value="{{ old('judul') }}" required
                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none"
                placeholder="Masukkan judul atau nama makanan...">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Unggah Foto</label>
            <input type="file" name="img" required
                class="w-full px-4 py-2 rounded-xl border border-gray-300 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
            <p class="text-xs text-gray-400 mt-1">Format: JPG, PNG, JPEG (Maks. 5MB)</p>
        </div>

        <div class="flex items-center space-x-4 pt-4">
            <button type="submit" 
                class="bg-amber-500 hover:bg-amber-600 text-black font-bold px-6 py-3 rounded-xl transition shadow-md cursor-pointer">
                Simpan Galeri
            </button>
            <a href="{{ route('admin.galeri.index') }}" class="text-gray-600 hover:text-gray-800 font-semibold text-sm">Batal</a>
        </div>
    </form>
</div>
@endsection