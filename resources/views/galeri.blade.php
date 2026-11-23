<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Galeri Kami</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome untuk ikon sosial media -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Alpine.js untuk Slider Interaktif -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-white text-gray-800 antialiased">

    <!-- 1. HERO BANNER ATAS -->
    <div class="relative w-full h-[450px] bg-cover bg-center flex flex-col justify-between p-6 md:px-16"
        style="background-image: url('{{ asset('img/contoh.jpeg') }}'); background-color: rgba(0,0,0,0.6); background-blend-mode: overlay;">

        <!-- Panggil Navbar Terpisah -->
        @include('layouts.navbar')

        <!-- Judul Banner di Bagian Bawah -->
        <div class="mt-auto pb-40  w-full">
            <h1 class="text-white text-4xl md:text-5xl font-black uppercase tracking-wide">
                BERITA KAMI
            </h1>
        </div>
    </div>

    <!-- 2. FITUR SLIDER UTAMA (Dengan Tombol Panah Kiri & Kanan) -->
    <section class="w-full bg-white py-24" x-data="{
        activeSlide: 0,
        images: [
            @foreach ($galeris as $item)
                    '{{ asset($item->img) }}', @endforeach
        ],
        next() {
            this.activeSlide = (this.activeSlide + 1) % this.images.length;
        },
        prev() {
            this.activeSlide = (this.activeSlide - 1 + this.images.length) % this.images.length;
        }
    }">
        <div class="max-w-5xl mx-auto px-6">
            @if (count($galeris) > 0)
                <div
                    class="relative w-full h-[400px] md:h-[500px] rounded-3xl overflow-hidden shadow-2xl border border-gray-100 bg-gray-100 flex items-center justify-center">

                    <!-- Menampilkan Gambar Aktif Berdasarkan Slider -->
                    <template x-for="(img, index) in images" :key="index">
                        <div x-show="activeSlide === index"
                            class="absolute inset-name w-full h-full transition-opacity duration-500 ease-in-out">
                            <img :src="img" alt="Featured Galeri" class="w-full h-full object-cover">
                        </div>
                    </template>

                    <!-- Tombol Panah Kiri (<) -->
                    <button @click="prev()"
                        class="absolute left-6 z-10 w-12 h-12 rounded-full bg-white/90 hover:bg-white text-black shadow-lg flex items-center justify-center text-xl transition-transform duration-300 hover:scale-110">
                        <i class="fas fa-chevron-left"></i>
                    </button>

                    <!-- Tombol Panah Kanan (>) -->
                    <button @click="next()"
                        class="absolute right-6 z-10 w-12 h-12 rounded-full bg-white/90 hover:bg-white text-black shadow-lg flex items-center justify-center text-xl transition-transform duration-300 hover:scale-110">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            @else
                <div class="text-center py-10 text-gray-500 text-base">
                    Belum ada data galeri utama.
                </div>
            @endif
        </div>
    </section>

    <!-- 3. GRID GALERI FOTO LAINNYA -->
    <section class="w-full bg-gray-100 py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            @if (count($galeris) > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    @foreach ($galeris->take(4) as $item)
                        <div
                            class="h-64 w-full rounded-3xl overflow-hidden shadow-[0_4px_20px_rgb(0,0,0,0.05)] border border-gray-100 transition-transform duration-300 hover:scale-105">
                            <img src="{{ asset($item->img) }}" alt="Galeri Foto" class="w-full h-full object-cover">
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-10 text-gray-500 text-base">
                    Belum ada foto galeri yang tersedia.
                </div>
            @endif
        </div>
    </section>

    <!-- 4. FOOTER GLOBAL -->
    @include('layouts.app')

</body>

</html>
