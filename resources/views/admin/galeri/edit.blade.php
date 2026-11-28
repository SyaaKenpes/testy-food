@extends('admin.layouts.app')

@section('header-title', 'Edit Galeri')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-12">
    <div class="mb-6">
        <h2 class="text-xl font-bold text-gray-900">Edit Foto Galeri</h2>
        <p class="text-sm text-gray-500 mt-1">Perbarui informasi atau ganti foto galeri makanan.</p>
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

    <form action="{{ route('admin.galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Judul / Keterangan Foto</label>
            <input type="text" name="judul" value="{{ old('judul', $galeri->judul) }}" required
                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none"
                placeholder="Masukkan judul atau nama makanan...">
        </div>

        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Foto Saat Ini</label>
            <div class="mb-3">
                <img src="{{ asset($galeri->img) }}" alt="{{ $galeri->judul }}" 
                    class="w-32 h-24 object-cover rounded-xl shadow-sm border border-gray-200">
            </div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Ganti Foto (Opsional)</label>
            <input type="file" name="img"
                class="w-full px-4 py-2 rounded-xl border border-gray-300 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
            <p class="text-xs text-gray-400 mt-1">Biarkan kosong jika tidak ingin mengubah foto.</p>
        </div>

        <div class="flex items-center space-x-4 pt-4">
            <button type="submit" 
                class="bg-amber-500 hover:bg-amber-600 text-black font-bold px-6 py-3 rounded-xl transition shadow-md cursor-pointer">
                Perbarui Galeri
            </button>
            <a href="{{ route('admin.galeri.index') }}" class="text-gray-600 hover:text-gray-800 font-semibold text-sm">Batal</a>
        </div>
    </form>
</div>
@endsection