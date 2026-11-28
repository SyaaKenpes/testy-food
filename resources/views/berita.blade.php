<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Berita Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-white text-gray-800 antialiased">

    <!-- 1. HERO BANNER ATAS -->
    <div class="relative w-full h-[450px] bg-cover bg-center flex flex-col justify-between p-6 md:px-16"
        style="background-image: url('{{ asset('img/contoh.jpeg') }}'); background-color: rgba(0,0,0,0.6); background-blend-mode: overlay;">
        @include('layouts.navbar')
        <div class="mt-auto pb-40 w-full">
            <h1 class="text-white text-4xl md:text-5xl font-black uppercase tracking-wide">
                BERITA KAMI
            </h1>
        </div>
    </div>

    <!-- 2. BERITA UTAMA (FEATURED NEWS) -->
    <section class="w-full py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            @if (isset($mainBerita))
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6">
                        <div
                            class="h-96 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                            <img src="{{ asset($mainBerita->img) }}" alt="Berita Utama"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="lg:col-span-6 space-y-6">
                        <h2 class="text-2xl md:text-3xl font-extrabold text-black uppercase leading-snug">
                            {{ $mainBerita->judul }}
                        </h2>
                        <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                            {{ $mainBerita->deskripsi }}
                        </p>
                        <div class="pt-4">
                            <a href="#"
                                class="inline-block bg-black text-white text-xs md:text-sm font-bold tracking-widest uppercase px-10 py-4 shadow-md transition-transform duration-300 hover:scale-105">
                                BACA SELENGKAPNYA
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <p class="text-center text-gray-500">Belum ada berita utama yang dipilih oleh admin.</p>
            @endif
        </div>
    </section>

    <!-- 3. BERITA LAINNYA (GRID SECTION - 8 CARD) -->
    <section class="w-full bg-gray-100 py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <!-- Judul Section -->
            <h2 class="text-3xl md:text-4xl font-black text-black uppercase tracking-wide mb-12">
                BERITA LAINNYA
            </h2>

            <!-- Grid Card Berita Lainnya -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @if (isset($beritaPendukung) && count($beritaPendukung) > 0)
                    @foreach ($beritaPendukung as $item)
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
                    <p class="text-gray-500 col-span-4 text-center">Belum ada berita pendukung lainnya.</p>
                @endif
            </div>
        </div>
    </section>

    @include('layouts.app')
</body>

</html>
