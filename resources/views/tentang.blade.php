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

        <!-- Judul Banner (Disesuaikan proporsinya dengan Home) -->
        <div class="mt-auto pb-40  w-full">
            <h1 class="text-white text-4xl md:text-5xl font-black uppercase tracking-wide">
                TENTANG KAMI
            </h1>
        </div>
    </div>

    <!-- 2. KONTEN TASTY FOOD & DESKRIPSI -->
    <section class="w-fu`ll bg-gray-100 py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <!-- Sisi Kiri: Teks -->
            <div class="lg:col-span-6 space-y-6">
                <h2 class="text-3xl md:text-4xl font-extrabold text-black uppercase">
                    TASTY FOOD
                </h2>
                <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,
                    dui diam convallis arcu, eget consectetur ex sem eget lacus.
                </p>
                <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,
                    dui diam convallis arcu.
                </p>
            </div>

            <!-- Sisi Kanan: 2 Gambar -->
            <div class="lg:col-span-6 grid grid-cols-2 gap-6">
                <div
                    class="h-80 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/berita1.jpg') }}" alt="Food 1" class="w-full h-full object-cover">
                </div>
                <div
                    class="h-80 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 mt-6 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/berita2.jpg') }}" alt="Food 2" class="w-full h-full object-cover">
                </div>
            </div>

        </div>
    </section>

    <!-- 3. BAGIAN VISI -->
    <section class="max-w-7xl mx-auto py-16 px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Sisi Kiri: Gambar Visi (Lebar 6 Kolom) -->
        <div class="lg:col-span-6 grid grid-cols-2 gap-6">
            <div
                class="h-72 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('img/berita3.jpg') }}" alt="Visi 1" class="w-full h-full object-cover">
            </div>
            <div
                class="h-72 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 mt-6 transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('img/berita4.jpg') }}" alt="Visi 2" class="w-full h-full object-cover">
            </div>
        </div>
        <!-- Sisi Kanan: Teks Visi (Lebar 6 Kolom) -->
        <div class="lg:col-span-6 space-y-6">
            <h2 class="text-3xl md:text-4xl font-extrabold text-black uppercase">
                VISI
            </h2>
            <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus.
                Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit.
            </p>
        </div>
    </section>

    <!-- 4. BAGIAN MISI -->
    <section class="max-w-7xl mx-auto py-16 px-6 md:px-12 mb-24 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <!-- Sisi Kiri: Teks Misi (Lebar 6 Kolom) -->
        <div class="lg:col-span-6 space-y-6">
            <h2 class="text-3xl md:text-4xl font-extrabold text-black uppercase">
                MISI
            </h2>
            <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus.
                Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit.
            </p>
        </div>
        <!-- Sisi Kanan: Gambar Misi (Lebar 6 Kolom) -->
        <div class="lg:col-span-6">
            <div
                class="h-80 w-full rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                <img src="{{ asset('img/berita5.jpg') }}" alt="Misi" class="w-full h-full object-cover">
            </div>
        </div>
    </section>

    <!-- 5. FOOTER -->
    @include('layouts.app')

</body>

</html>
