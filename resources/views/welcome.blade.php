<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Home</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800 antialiased">
    <!-- NAVBAR DINAMIS -->
    <nav id="navbar" class="w-full px-8 md:px-16 py-8 flex flex-col md:flex-row items-center justify-start gap-8 z-50 transition-all duration-300">
        <!-- Logo di sebelah kiri -->
        <a href="#home" class="text-2xl md:text-3xl font-extrabold tracking-wider uppercase text-gray-900">
            TASTY FOOD
        </a>

        <!-- Menu Navigasi -->
        <ul id="nav-menu" class="flex items-center space-x-8 md:space-x-12 text-sm md:text-base font-bold tracking-widest uppercase text-gray-700">
            <li><a href="#home" class="hover:text-amber-500 transition">HOME</a></li>
            <li><a href="#tentang" class="hover:text-amber-500 transition">TENTANG</a></li>
            <li><a href="#berita" class="hover:text-amber-500 transition">BERITA</a></li>
            <li><a href="#galeri" class="hover:text-amber-500 transition">GALERI</a></li>
            <li><a href="#kontak" class="hover:text-amber-500 transition">KONTAK</a></li>
        </ul>
    </nav>

    <!-- HOME SECTION & NAVBAR -->
    <section id="home"
        class="relative w-full min-h-[90vh] bg-gray-100 flex flex-col justify-start overflow-hidden">

        <!-- Hero Content -->
        <div class="w-full px-8 md:px-16 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start pt-2 pb-12 relative z-10">

            <!-- Sisi Kiri: Teks (Lebar 6 Kolom) -->
            <div class="lg:col-span-6 space-y-6">
                <br>
                <!-- Garis kecil pemanis di atas judul -->
                <div class="w-20 h-1 bg-gray-900"></div>

                <h1
                    class="text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tight text-gray-900 leading-none">
                    HEALTHY <br> TASTY FOOD
                </h1>

                <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-lg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,
                    dui diam convallis arcu, eget consectetur ex sem eget lacus.
                </p>

                <div class="pt-2 transition-transform duration-300 hover:scale-105">
                    <a href="#tentang"
                        class="inline-block bg-black text-white text-xs font-bold tracking-widest uppercase px-20 py-4 rounded hover:bg-gray-800 transition">
                        TENTANG KAMI
                    </a>
                </div>
            </div>

            <!-- Sisi Kanan Kosong (Untuk Ruang Gambar Besar) -->
            <div class="lg:col-span-6"></div>

        </div>

        <!-- Gambar Besar di Kanan Atas (Menempel Estetik) -->
        <!-- Gambar Bulat Besar di Kanan -->
        <div class="hidden lg:block absolute -right-32 -top-24 w-[700px] h-[700px] z-0 pointer-events-none">
            <img src="{{ asset('img/home.png') }}" alt="Healthy Tasty Food" class="w-full h-full object-contain">
        </div>
        <div class="h-8"></div>
    </section>

    <!-- TENTANG KAMI SECTION -->
    <section id="tentang" class="w-full bg-white pt-24 pb-0">
        <!-- Bagian Judul di Atas (Background Putih) -->
        <div class="max-w-4xl mx-auto px-6 text-center space-y-4 mb-20">
            <h2 class="text-4xl md:text-5xl font-extrabold text-black uppercase tracking-wide">
                TENTANG KAMI
            </h2>
            <p class="text-gray-600 text-base md:text-lg md:text-base leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui
                diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                Fusce sit amet viverra ante.
            </p>
            <!-- Garis kecil pemenang di bawah teks -->
            <div class="w-12 h-1 bg-black mx-auto mt-4"></div>
        </div>

        <!-- Bagian Bawah: Satu Bungkus dengan Background Gambar & 4 Card -->
        <div class="relative w-full bg-cover bg-center py-28 px-6 md:px-12"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/contoh.jpeg') }}');">

            <div class="max-w-7xl mx-auto">

                <!-- Grid 4 Card Makanan -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 pt-12">

                    <!-- Card 1 -->
                    <div
                        class="relative bg-white rounded-2xl p-16 pt-26 shadow-xl flex flex-col items-center text-center mt-10 transition-transform duration-300 hover:scale-105">
                        <!-- Gambar Bulat di Atas Card -->
                        <div class="absolute -top-20 w-36 h-36 drop-shadow-xl">
                            <img src="{{ asset('img/tentang1.png') }}" alt="Food 1"
                                class="w-full h-full object-contain">
                        </div>
                        <h3 class="text-xl font-extrabold text-black uppercase mb-2">LOREM IPSUM</h3>
                        <p class="text-gray-500 text-xm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                            commodo.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="relative bg-white rounded-2xl p-6 pt-16 shadow-xl flex flex-col items-center text-center mt-10 transition-transform duration-300 hover:scale-105">
                        <div class="absolute -top-20 w-36 h-36 drop-shadow-xl">
                            <img src="{{ asset('img/tentang2.png') }}" alt="Food 2"
                                class="w-full h-full object-contain">
                        </div>
                        <h3 class="text-xl font-extrabold text-black uppercase mb-2">LOREM IPSUM</h3>
                        <p class="text-gray-500 text-xm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                            commodo.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="relative bg-white rounded-2xl p-6 pt-16 shadow-xl flex flex-col items-center text-center mt-10 transition-transform duration-300 hover:scale-105">
                        <div class="absolute -top-20 w-36 h-36 drop-shadow-xl">
                            <img src="{{ asset('img/tentang3.png') }}" alt="Food 3"
                                class="w-full h-full object-contain">
                        </div>
                        <h3 class="text-xl font-extrabold text-black uppercase mb-2">LOREM IPSUM</h3>
                        <p class="text-gray-500 text-xm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                            commodo.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="relative bg-white rounded-2xl p-6 pt-16 shadow-xl flex flex-col items-center text-center mt-10 transition-transform duration-300 hover:scale-105">
                        <div class="absolute -top-20 w-36 h-36 drop-shadow-xl">
                            <img src="{{ asset('img/tentang4.png') }}" alt="Food 4"
                                class="w-full h-full object-contain">
                        </div>
                        <h3 class="text-xl font-extrabold text-black uppercase mb-2">LOREM IPSUM</h3>
                        <p class="text-gray-500 text-xm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum
                            commodo.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <section id="berita" class="bg-gray-100 py-24">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <!-- Judul Section -->
            <h2 class="text-4xl md:text-5xl font-black text-black uppercase tracking-wide mb-12 text-center">
                BERITA KAMI
            </h2>

            @if (count($beritas) > 0)
                <!-- Layout Utama: Grid 2 Kolom (Kiri: Berita Utama/Besar, Kanan: Grid 4 Berita Kecil) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

                    <!-- KOLOM KIRI: Berita Utama yang Besar-->
                    @php $mainBerita = $beritas->first(); @endphp
                    @if ($mainBerita)
                        <div
                            class="lg:col-span-6 bg-white rounded-3xl shadow-[0_8px_30px_rgb(0,0,0,0.08)] overflow-hidden flex flex-col justify-between border border-gray-100 transition-transform duration-300 hover:scale-105">
                            <div>
                                <div class="h-80 w-full overflow-hidden ">
                                    <img src="{{ asset($mainBerita->img) }}" alt="{{ $mainBerita->judul }}"
                                        class="w-full h-full object-cover">
                                </div>
                                <div class="p-8">
                                    <h3 class="text-2xl md:text-3xl font-extrabold text-black uppercase mb-4">
                                        {{ $mainBerita->judul }}
                                    </h3>
                                    <p class="text-gray-600 text-lg leading-relaxed">
                                        {{ $mainBerita->deskripsi }}
                                    </p>
                                </div>
                            </div>
                            <div class="px-8 pb-8 pt-2 flex items-center justify-between">
                                <a href="#"
                                    class="text-amber-500 hover:text-amber-600 text-base font-bold transition">
                                    Baca selengkapnya
                                </a>
                                <span class="text-gray-400 font-bold tracking-widest text-lg">•••</span>
                            </div>
                        </div>
                    @endif

                    <!-- KOLOM KANAN: 4 Berita Kecil (Grid 2x2) -->
                    <div class="lg:col-span-6 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @foreach ($beritas->skip(1)->take(4) as $item)
                            <div
                                class="bg-white rounded-2xl shadow-[0_4px_20px_rgb(0,0,0,0.05)] overflow-hidden flex flex-col justify-between border border-gray-100 transition-transform duration-300 hover:scale-105">
                                <div>
                                    <div class="h-40 w-full overflow-hidden">
                                        <img src="{{ asset($item->img) }}" alt="{{ $item->judul }}"
                                            class="w-full h-full object-cover">
                                    </div>
                                    <div class="p-5">
                                        <h3 class="text-base font-extrabold text-black uppercase mb-2 line-clamp-1">
                                            {{ $item->judul }}
                                        </h3>
                                        <p class="text-gray-500 text-lg leading-relaxed line-clamp-3">
                                            {{ $item->deskripsi }}
                                        </p>
                                    </div>
                                </div>
                                <div class="px-5 pb-5 pt-1 flex items-center justify-between">
                                    <a href="#"
                                        class="text-amber-500 hover:text-amber-600 text-xs font-semibold transition">
                                        Baca selengkapnya
                                    </a>
                                    <span class="text-gray-400 font-bold tracking-widest text-sm">•••</span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            @else
                <div class="text-center py-10 text-gray-500 text-base">
                    Belum ada data berita yang tersedia di database.
                </div>
            @endif
        </div>
    </section>

    <!-- GALERI KAMI SECTION -->
    <section id="galeri" class="w-full bg-white py-24 px-6 md:px-16">
        <div class="max-w-7xl mx-auto text-center">

            <!-- Judul Galeri -->
            <h2 class="text-4xl md:text-5xl font-black text-black uppercase tracking-wide mb-16">
                GALERI KAMI
            </h2>

            <!-- Grid Foto Galeri (3 Kolom x 2 Baris = 6 Foto) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">

                <!-- Foto 1 -->
                <div
                    class="w-full h-80 rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/contoh.jpeg') }}" alt="Galeri 1" class="w-full h-full object-cover">
                </div>

                <!-- Foto 2 -->
                <div
                    class="w-full h-80 rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/contoh.jpeg') }}" alt="Galeri 2"
                        class="w-full h-full object-cover bg-gray-50">
                </div>

                <!-- Foto 3 -->
                <div
                    class="w-full h-80 rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/contoh.jpeg') }}" alt="Galeri 3" class="w-full h-full object-cover">
                </div>

                <!-- Foto 4 -->
                <div
                    class="w-full h-80 rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/contoh.jpeg') }}" alt="Galeri 4" class="w-full h-full object-cover">
                </div>

                <!-- Foto 5 -->
                <div
                    class="w-full h-80 rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/contoh.jpeg') }}" alt="Galeri 5"
                        class="w-full h-full object-cover bg-gray-50">
                </div>

                <!-- Foto 6 -->
                <div
                    class="w-full h-80 rounded-3xl overflow-hidden shadow-lg border border-gray-100 transition-transform duration-300 hover:scale-105">
                    <img src="{{ asset('img/contoh.jpeg') }}" alt="Galeri 6" class="w-full h-full object-cover">
                </div>

            </div>

            <!-- Tombol Lihat Lebih Banyak -->
            <div class="inline-block transition-transform duration-300 hover:scale-105">
                <a href="#"
                    class="bg-black text-white font-bold uppercase tracking-widest px-12 py-4 rounded-xl text-sm shadow-xl hover:bg-gray-800 transition duration-300 ">
                    LIHAT LEBIH BANYAK
                </a>
            </div>

        </div>
    </section>


    <!-- FOOTER SECTION -->
    <footer id="kontak" class="w-full bg-[#111111] text-white pt-20 pb-12 px-8 md:px-16">

        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 pb-16 border-b border-gray-800">

            <!-- Kolom 1: Brand & Deskripsi -->
            <div class="lg:col-span-5 space-y-6">
                <h4 class="text-2xl md:text-3xl font-black tracking-wide">
                    Tasty Food
                </h4>
                <p class="text-gray-300 text-base md:text-lg leading-relaxed max-w-lg">
                    Menghadirkan informasi kuliner terbaik, resep pilihan, serta ragam cerita cita rasa nusantara. Kami
                    berkomitmen menyajikan inspirasi hidangan berkualitas untuk setiap momen Anda.
                </p>
                <!-- Ikon Sosial Media -->
                <div class="flex items-center space-x-4 pt-2">
                    <a href="#"
                        class="w-12 h-12 rounded-full bg-[#3b5998] flex items-center justify-center text-white text-xl transition-transform duration-300 hover:scale-110">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-12 h-12 rounded-full bg-[#1da1f2] flex items-center justify-center text-white text-xl transition-transform duration-300 hover:scale-110">
                        <i class="fab fa-twitter"></i>
                    </a>
                </div>
            </div>

            <!-- Kolom 2: Useful Links (Mengambil 2 kolom) -->
            <div class="lg:col-span-2 space-y-6">
                <h3 class="text-xl md:text-xl font-bold text-white">
                    Useful links
                </h3>
                <ul class="space-y-4 text-gray-300 text-base text-lg">
                    <li>
                        <a href="#"
                            class="inline-block transition-transform duration-300 hover:scale-105 hover:text-white">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block transition-transform duration-300 hover:scale-105 hover:text-white">
                            Hewan
                        </a>
                    </li>
                    <li>
                        <a href="#galeri"
                            class="inline-block transition-transform duration-300 hover:scale-105 hover:text-white">
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block transition-transform duration-300 hover:scale-105 hover:text-white">
                            Testimonial
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 3: Privacy (Mengambil 2 kolom) -->
            <div class="lg:col-span-2 space-y-6">
                <h3 class="text-xl md:text-xl font-bold text-white">
                    Privacy
                </h3>
                <ul class="space-y-4 text-gray-300 text-base text-lg">
                    <li>
                        <a href="#"
                            class="inline-block transition-transform duration-300 hover:scale-105 hover:text-white">
                            Karir
                        </a>
                    </li>
                    <li>
                        <a href="#tentang"
                            class="inline-block transition-transform duration-300 hover:scale-105 hover:text-white">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="#kontak"
                            class="inline-block transition-transform duration-300 hover:scale-105 hover:text-white">
                            Kontak Kami
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="inline-block transition-transform duration-300 hover:scale-105 hover:text-white">
                            Servis
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 4: Contact Info (Mengambil 3 kolom) -->
            <div class="lg:col-span-3 space-y-6">
                <h3 class="text-xl md:text-xl font-bold text-white">
                    Contact Info
                </h3>
                <ul class="space-y-4 text-gray-300 text-base text-lg">
                    <li
                        class="flex items-center space-x-4 transition-transform duration-300 hover:scale-105 hover:text-white cursor-pointer">
                        <i class="fas fa-envelope text-white text-xl"></i>
                        <span>tastyfood@gmail.com</span>
                    </li>
                    <li
                        class="flex items-center space-x-4 transition-transform duration-300 hover:scale-105 hover:text-white cursor-pointer">
                        <i class="fas fa-phone-alt text-white text-xl"></i>
                        <span>+62 812 3456 7890</span>
                    </li>
                    <li
                        class="flex items-center space-x-4 transition-transform duration-300 hover:scale-105 hover:text-white cursor-pointer">
                        <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        <span>Kota Bandung, Jawa Barat</span>
                    </li>
                </ul>
            </div>

        </div>

        <!-- Copyright -->
        <div class="pt-6 text-center text-gray-400 text-sm md:text-xm">
            Copyright ©2026 All rights reserved
        </div>

    </footer>

    <script>
        const navbar = document.getElementById('navbar');

        // Fungsi untuk mendeteksi posisi scroll halaman
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                // Jika halaman digulung ke bawah
                navbar.classList.remove('w-full', 'px-8', 'md:px-16', 'py-8', 'justify-start', 'gap-8');
                navbar.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'bg-white/90', 'backdrop-blur-md', 'px-8', 'md:px-16', 'py-5', 'justify-between', 'shadow-md');
            } else {
                // Jika posisi kembali ke paling atas (Home)
                navbar.classList.remove('fixed', 'top-0', 'left-0', 'bg-white/90', 'backdrop-blur-md', 'py-5', 'justify-between', 'shadow-md');
                navbar.classList.add('w-full', 'px-8', 'md:px-16', 'py-8', 'justify-start', 'gap-8');
            }
        });
    </script>

</body>

</html>
