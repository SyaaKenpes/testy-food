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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk Ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased">

    <!-- HOME SECTION & NAVBAR -->
    <section id="home" class="relative w-full min-h-[90vh] bg-[#F9F9F9] flex flex-col justify-start overflow-hidden">
        
        <!-- Navbar (Logo dan Menu Berjejer di Kiri) -->
        <nav class="w-full px-8 md:px-16 py-8 flex flex-col md:flex-row items-start md:items-center justify-start gap-8 z-20">
            <a href="#" class="text-2xl md:text-4xl font-extrabold tracking-wider uppercase text-gray-900">
                TASTY FOOD
            </a>    
            
            <!-- Menu Desktop -->
            <ul class="flex items-center space-x8 md:space-x-12 text-sm md:text-base font-semibold tracking-widest uppercase text-gray-700">
                <li><a href="#home" class="text-black border-b-2 border-black pb-1">HOME</a></li>
                <li><a href="#tentang" class="hover:text-amber-500 transition">TENTANG</a></li>
                <li><a href="#berita" class="hover:text-amber-500 transition">BERITA</a></li>
                <li><a href="#galeri" class="hover:text-amber-500 transition">GALERI</a></li>
                <li><a href="#kontak" class="hover:text-amber-500 transition">KONTAK</a></li>
            </ul>
        </nav>

        <!-- Hero Content -->
        <div class="w-full px-8 md:px-16 grid grid-cols-1 lg:grid-cols-12 gap-12 items-start pt-2 pb-12 relative z-10">
            
            <!-- Sisi Kiri: Teks (Lebar 6 Kolom) -->
            <div class="lg:col-span-6 space-y-6">
                <!-- Garis kecil pemanis di atas judul -->
                <div class="w-20 h-1 bg-gray-900"></div>
                
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black uppercase tracking-tight text-gray-900 leading-none">
                    HEALTHY <br> TASTY FOOD
                </h1>
                
                <p class="text-gray-600 text-base md:text-lg leading-relaxed max-w-lg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.
                </p>
                
                <div class="pt-2">
                    <a href="#tentang" 
                       class="inline-block bg-black text-white text-xs font-bold tracking-widest uppercase px-8 py-4 rounded hover:bg-gray-800 transition">
                        TENTANG KAMI
                    </a>
                </div>
            </div>

            <!-- Sisi Kanan Kosong (Untuk Ruang Gambar Besar) -->
            <div class="lg:col-span-6"></div>

        </div>

        <!-- Gambar Besar di Kanan Atas (Menempel Estetik) -->
        <!-- Gambar Bulat Besar di Kanan -->
        <div class="hidden lg:block absolute -right-32 -top-24 w-[800px] h-[800px] z-0 pointer-events-none">
    <img src="{{ asset('img/home.png') }}" 
         alt="Healthy Tasty Food" 
         class="w-full h-full object-contain">
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
            </p>
            <!-- Garis kecil pemenang di bawah teks -->
            <div class="w-12 h-1 bg-black mx-auto mt-4"></div>
        </div>

        <!-- Bagian Bawah: Satu Bungkus dengan Background Gambar & 4 Card -->
        <div class="relative w-full bg-cover bg-center py-28 px-6 md:px-12"
             style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('img/contoh.jpeg') }}');">
            
            <div class="max-w-7xl mx-auto">
                
                <!-- Grid 4 Card Makanan -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3 pt-12">
                    
                    <!-- Card 1 -->
                    <div class="relative bg-white rounded-2xl p-16 pt-26 shadow-xl flex flex-col items-center text-center mt-10">
                        <!-- Gambar Bulat di Atas Card -->
                        <div class="absolute -top-20 w-36 h-36 rounded-full overflow-hidden border-4 border-white shadow-md bg-gray-200">
                            <img src="{{ asset('img/contoh.jpeg') }}" alt="Food 1" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-extrabold text-black uppercase mb-2">LOREM IPSUM</h3>
                        <p class="text-gray-500 text-xm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="relative bg-white rounded-2xl p-6 pt-16 shadow-xl flex flex-col items-center text-center mt-10">
                        <div class="absolute -top-20 w-36 h-36 rounded-full overflow-hidden border-4 border-white shadow-md bg-gray-200">
                            <img src="{{ asset('img/contoh.jpeg') }}" alt="Food 2" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-extrabold text-black uppercase mb-2">LOREM IPSUM</h3>
                        <p class="text-gray-500 text-xm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="relative bg-white rounded-2xl p-6 pt-16 shadow-xl flex flex-col items-center text-center mt-10">
                        <div class="absolute -top-20 w-36 h-36 rounded-full overflow-hidden border-4 border-white shadow-md bg-gray-200">
                            <img src="{{ asset('img/contoh.jpeg') }}" alt="Food 3" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-extrabold text-black uppercase mb-2">LOREM IPSUM</h3>
                        <p class="text-gray-500 text-xm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="relative bg-white rounded-2xl p-6 pt-16 shadow-xl flex flex-col items-center text-center mt-10">
                        <div class="absolute -top-20 w-36 h-36 rounded-full overflow-hidden border-4 border-white shadow-md bg-gray-200">
                            <img src="{{ asset('img/contoh.jpeg') }}" alt="Food 4" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-xl font-extrabold text-black uppercase mb-2">LOREM IPSUM</h3>
                        <p class="text-gray-500 text-xm leading-relaxed">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- 
        ==================================================
        BAGIAN BERITA (DIKOMENTARI SEMENTARA SESUAI PERMINTAAN)
        ==================================================
    -->
    <!-- 
    <section id="berita" class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <h2 class="text-2xl md:text-3xl font-extrabold text-black uppercase tracking-wide mb-10">
                BERITA LAINNYA
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-7">
                @forelse ($beritas as $item)
                <article class="bg-white rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.06)] overflow-hidden flex flex-col justify-between border border-gray-100">
                    <div>
                        <div class="h-48 w-full overflow-hidden">
                            <img src="{{ asset($item->img) }}" alt="{{ $item->judul }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-base font-extrabold text-black uppercase mb-3 line-clamp-1">{{ $item->judul }}</h3>
                            <p class="text-gray-500 text-xs leading-relaxed line-clamp-4">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                    <div class="px-6 pb-6 pt-2 flex items-center justify-between">
                        <a href="#" class="text-amber-500 hover:text-amber-600 text-xs font-semibold transition">Baca selengkapnya</a>
                        <span class="text-gray-400 font-bold tracking-widest text-sm">•••</span>
                    </div>
                </article>
                @empty
                <div class="col-span-full text-center py-10 text-gray-500 text-sm">
                    Belum ada data berita yang tersedia di database.
                </div>
                @endforelse
            </div>
        </div>
    </section>
    -->

    <!-- FOOTER SECTION -->
    <footer id="kontak" class="bg-[#121212] text-white pt-16 pb-10">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-14">
                
                <!-- Kolom 1: Brand & Deskripsi -->
                <div class="lg:col-span-5 space-y-5 pr-4">
                    <h3 class="text-2xl font-bold tracking-wide">Tasty Food</h3>
                    <p class="text-gray-400 text-xs leading-relaxed">
                        Menghadirkan informasi kuliner terbaik, resep pilihan, serta ragam cerita cita rasa nusantara. Kami berkomitmen menyajikan inspirasi hidangan berkualitas untuk setiap momen Anda.
                    </p>
                    <div class="flex items-center space-x-3 pt-2">
                        <a href="#" class="w-9 h-9 rounded-full bg-[#3b5998] flex items-center justify-center text-white hover:opacity-80 transition">
                            <i class="fab fa-facebook-f text-sm"></i>
                        </a>
                        <a href="#" class="w-9 h-9 rounded-full bg-[#1da1f2] flex items-center justify-center text-white hover:opacity-80 transition">
                            <i class="fab fa-twitter text-sm"></i>
                        </a>
                    </div>
                </div>

                <!-- Kolom 2: Useful Links -->
                <div class="lg:col-span-2 space-y-4">
                    <h4 class="text-base font-bold">Useful links</h4>
                    <ul class="space-y-2.5 text-xs text-gray-300">
                        <li><a href="#" class="hover:text-white transition">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition">Hewan</a></li>
                        <li><a href="#galeri" class="hover:text-white transition">Galeri</a></li>
                        <li><a href="#" class="hover:text-white transition">Testimonial</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Privacy -->
                <div class="lg:col-span-2 space-y-4">
                    <h4 class="text-base font-bold">Privacy</h4>
                    <ul class="space-y-2.5 text-xs text-gray-300">
                        <li><a href="#" class="hover:text-white transition">Karir</a></li>
                        <li><a href="#tentang" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#kontak" class="hover:text-white transition">Kontak Kami</a></li>
                        <li><a href="#" class="hover:text-white transition">Servis</a></li>
                    </ul>
                </div>

                <!-- Kolom 4: Contact Info -->
                <div class="lg:col-span-3 space-y-4">
                    <h4 class="text-base font-bold">Contact Info</h4>
                    <ul class="space-y-3 text-xs text-gray-300">
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-white w-4"></i>
                            <span>tastyfood@gmail.com</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone-alt text-white w-4"></i>
                            <span>+62 812 3456 7890</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-white w-4"></i>
                            <span>Kota Bandung, Jawa Barat</span>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-500 text-xs">
                    Copyright ©2026 All rights reserved
                </p>
            </div>

        </div>
    </footer>

</body>
</html>