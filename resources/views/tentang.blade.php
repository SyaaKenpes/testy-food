<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Tentang Kami</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome untuk ikon sosial media -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-white text-gray-800 antialiased">
    @include('layouts.navbar')

    <!-- 1. HERO BANNER ATAS -->
    <div class="relative w-full h-[450px] bg-cover bg-center flex flex-col justify-between p-6 md:px-16"
        style="background-image: url('{{ asset('img/contoh.jpeg') }}'); background-color: rgba(0,0,0,0.6); background-blend-mode: overlay;">

        <!-- Judul Banner -->
        <div class="mt-auto pb-40 w-full">
            <h1 class="text-white text-4xl md:text-5xl font-black uppercase tracking-wide">
                {{ $tentang->judul ?? 'TENTANG KAMI' }}
            </h1>
        </div>
    </div>

    <!-- 2. KONTEN TASTY FOOD & DESKRIPSI (2 Gambar di Kanan) -->
    <section class="w-full bg-gray-100 py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <!-- Sisi Kiri -->
            <div class="lg:col-span-6 space-y-6">
                <h2 class="text-3xl md:text-4xl font-extrabold text-black uppercase">
                    {{ $tentang->judul ?? 'TASTY FOOD' }}
                </h2>
                <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                    {{ $tentang->deskripsi ?? 'Deskripsi belum tersedia.' }}
                </p>
            </div>

            <!-- Sisi Kanan (2 Gambar Berdampingan) -->
            <div class="lg:col-span-6 grid grid-cols-2 gap-6">
                <div
                    class="h-90 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/berita4.jpg') }}" alt="Tasty Food 1" class="w-full h-full object-cover">
                </div>
                <div
                    class="h-90 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/berita3.jpg') }}" alt="Tasty Food 2" class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </section>

    <!-- 3. BAGIAN VISI (2 Gambar di Kiri) -->
    <section class="max-w-7xl mx-auto py-16 px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Sisi Kiri (2 Gambar Berdampingan) -->
        <div class="lg:col-span-6 grid grid-cols-2 gap-6">
            <div
                class="h-100 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('img/berita1.jpg') }}" alt="Visi 1" class="w-full h-full object-cover">
            </div>
            <div
                class="h-100 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('img/berita3.jpg') }}" alt="Visi 2" class="w-full h-full object-cover">
            </div>
        </div>
        <!-- Sisi Kanan -->
        <div class="lg:col-span-6 space-y-6">
            <h2 class="text-3xl md:text-4xl font-extrabold text-black uppercase">
                VISI
            </h2>
            <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                {{ $tentang->visi_deskripsi ?? 'Visi belum diatur oleh admin.' }}
            </p>
        </div>
    </section>

    <!-- 4. BAGIAN MISI (1 Gambar Lebar di Sisi Kanan) -->
    <section class="max-w-7xl mx-auto py-16 px-6 md:px-12 mb-24 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Sisi Kiri -->
        <div class="lg:col-span-6 space-y-6">
            <h2 class="text-3xl md:text-4xl font-extrabold text-black uppercase">
                MISI
            </h2>
            <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                {{ $tentang->misi_deskripsi ?? 'Misi belum diatur oleh admin.' }}
            </p>
        </div>
        <!-- Sisi Kanan -->
        <div class="lg:col-span-6">
            <div
                class="h-80 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('img/berita2.jpg') }}" alt="Misi" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- 5. FOOTER -->
    @include('layouts.app')

</body>

</html>
