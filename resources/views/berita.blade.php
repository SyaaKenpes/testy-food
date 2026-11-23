<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Berita Kami</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome untuk ikon sosial media -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-white text-gray-800 antialiased">

    <!-- 1. HERO BANNER ATAS -->
    <div class="relative w-full h-[450px] bg-cover bg-center flex flex-col justify-between p-6 md:px-16"
        style="background-image: url('{{ asset('img/contoh.jpeg') }}'); background-color: rgba(0,0,0,0.6); background-blend-mode: overlay;">

        <!-- Panggil Navbar Terpisah -->
        @include('layouts.navbar')

        <!-- Judul Banner -->
        <div class="mt-auto pb-40  w-full">
            <h1 class="text-white text-4xl md:text-5xl font-black uppercase tracking-wide">
                BERITA KAMI
            </h1>
        </div>
    </div>

    <!-- 2. BERITA UTAMA (FEATURED NEWS) -->
    <section class="w-full py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            @php
                // Mengambil berita pertama sebagai berita utama jika data dari database tersedia
                $mainBerita = isset($beritas) && count($beritas) > 0 ? $beritas->first() : null;
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Sisi Kiri: Gambar Utama -->
                <div class="lg:col-span-6">
                    <div
                        class="h-96 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                        <img src="{{ $mainBerita ? asset($mainBerita->img) : 'https://images.unsplash.com/photo-1540420773420-3366772f4999?w=800' }}"
                            alt="Berita Utama" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Sisi Kanan: Teks & Tombol Baca Selengkapnya -->
                <div class="lg:col-span-6 space-y-6">
                    <h2 class="text-2xl md:text-3xl font-extrabold text-black uppercase leading-snug">
                        {{ $mainBerita ? $mainBerita->judul : 'APA SAJA MAKANAN KHAS NUSANTARA?' }}
                    </h2>
                    <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                        {{ $mainBerita ? $mainBerita->deskripsi : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.' }}
                    </p>
                    <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                        commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.
                    </p>
                    <div class="pt-4">
                        <a href="#"
                            class="inline-block bg-black text-white text-xs md:text-sm font-bold tracking-widest uppercase px-10 py-4 shadow-md transition-transform duration-300 hover:scale-105">
                            BACA SELENGKAPNYA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. BERITA LAINNYA (GRID SECTION) -->
    <section class="w-full bg-gray-100 py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <!-- Judul Section -->
            <h2 class="text-3xl md:text-4xl font-black text-black uppercase tracking-wide mb-12">
                BERITA LAINNYA
            </h2>

            <!-- Grid Card Berita Lainnya -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @if (isset($beritas) && count($beritas) > 1)
                    @foreach ($beritas->skip(1)->take(8) as $item)
                        <div
                            class="bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.05)] overflow-hidden flex flex-col justify-between border border-gray-100 transition-transform duration-300 hover:scale-105">
                            <div>
                                <div class="h-48 w-full overflow-hidden">
                                    <img src="{{ asset($item->img) }}" alt="{{ $item->judul }}"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-extrabold text-black uppercase mb-3 line-clamp-1">
                                        {{ $item->judul }}
                                    </h3>
                                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                                        {{ $item->deskripsi }}
                                    </p>
                                </div>
                            </div>
                            <div class="px-6 pb-6 pt-1 flex items-center justify-between">
                                <a href="#"
                                    class="text-amber-500 hover:text-amber-600 text-xs font-semibold transition">
                                    Baca selengkapnya
                                </a>
                                <span class="text-gray-400 font-bold tracking-widest text-sm">•••</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    @for ($i = 0; $i < 8; $i++)
                        <div
                            class="bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.05)] overflow-hidden flex flex-col justify-between border border-gray-100 transition-transform duration-300 hover:scale-105">
                            <div>
                                <div class="h-48 w-full overflow-hidden">
                                    <img src="{{ asset('img/berita2.jpg') }}"
                                        alt="Dummy Berita" class="w-full h-full object-cover">
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-extrabold text-black uppercase mb-3 line-clamp-1">
                                        LOREM IPSUM
                                    </h3>
                                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue
                                        eu rutrum commodo.
                                    </p>
                                </div>
                            </div>
                            <div class="px-6 pb-6 pt-1 flex items-center justify-between">
                                <a href="#"
                                    class="text-amber-500 hover:text-amber-600 text-xs font-semibold transition">
                                    Baca selengkapnya
                                </a>
                                <span class="text-gray-400 font-bold tracking-widest text-sm">•••</span>
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
        </div>
    </section>

    <!-- 4. FOOTER (Menggunakan Layout Terpisah) -->
    @include('layouts.app')

</body>

</html>
