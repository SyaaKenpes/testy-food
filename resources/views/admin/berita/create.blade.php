@extends('admin.layouts.app')

@section('header-title', 'Tambah Berita')

@section('content')
    <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-sm border border-gray-200 p-8 mb-12">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-900">Tambah Berita Baru</h2>
            <p class="text-sm text-gray-500 mt-1">Masukkan informasi berita dan tentukan status tampilannya.</p>
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

        <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Judul Berita</label>
                <input type="text" name="judul" value="{{ old('judul') }}" required
                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none"
                    placeholder="Masukkan judul berita...">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi / Isi Berita</label>
                <textarea name="deskripsi" rows="5" required
                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none"
                    placeholder="Tuliskan isi berita di sini...">{{ old('deskripsi') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Unggah Gambar Berita</label>
                <input type="file" name="img" required
                    class="w-full px-4 py-2 rounded-xl border border-gray-300 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
                <p class="text-xs text-gray-400 mt-1">Format: JPG, PNG, JPEG (Maks. 5MB)</p>
            </div>

            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 space-y-4">
                <div class="flex items-center space-x-3">
                    <input type="checkbox" name="is_featured" value="1" id="is_featured"
                        {{ old('is_featured') == 1 ? 'checked' : '' }}
                        class="w-5 h-5 text-amber-500 rounded border-gray-300 focus:ring-amber-500">
                    <label for="is_featured" class="text-sm font-semibold text-gray-800 cursor-pointer">
                        Jadikan Berita Utama (Hot News - Card Besar)
                    </label>
                </div>
                <p class="text-xs text-gray-500 ml-8">Catatan: Jika dicentang, berita utama sebelumnya akan otomatis
                    digantikan oleh berita ini.</p>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Urutan Card Pendukung (Pilih 1 - 4)</label>
                <select name="urutan"
                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
                    <option value="">-- Bukan Berita Pendukung / Biarkan Otomatis --</option>
                    <option value="2" {{ old('urutan', $berita->urutan ?? '') == 2 ? 'selected' : '' }}>Urutan ke-2
                    </option>
                    <option value="3" {{ old('urutan', $berita->urutan ?? '') == 3 ? 'selected' : '' }}>Urutan ke-3
                    </option>
                    <option value="4" {{ old('urutan', $berita->urutan ?? '') == 4 ? 'selected' : '' }}>Urutan ke-4
                    </option>
                </select>
                <p class="text-xs text-gray-400 mt-1">Hanya berlaku jika berita ini tidak dijadikan Hot News utama.</p>
            </div>

            <div class="flex items-center space-x-4 pt-4">
                <button type="submit"
                    class="bg-amber-500 hover:bg-amber-600 text-black font-bold px-6 py-3 rounded-xl transition shadow-md cursor-pointer">
                    Simpan Berita
                </button>
                <a href="{{ route('admin.berita.index') }}"
                    class="text-gray-600 hover:text-gray-800 font-semibold text-sm">Batal</a>
            </div>
        </form>
    </div>
@endsection
