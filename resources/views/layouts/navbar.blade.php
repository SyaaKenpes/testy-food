<!-- NAVBAR UTAMA -->
<nav class="w-full absolute top-0 left-0 z-50 px-8 md:px-16 py-6 flex items-center justify-between">
    <!-- Logo Sisi Kiri -->
    <a href="{{ route('home') }}" class="text-black text-2xl md:text-3xl font-extrabold tracking-wider uppercase">
        TASTY FOOD
    </a>

    <!-- Menu Navigasi Sisi Kanan -->
    <ul class="flex items-center space-x-6 md:space-x-10 text-sm md:text-base font-bold tracking-widest uppercase text-black">
        <li>
            <a href="{{ route('home') }}" class="hover:text-amber-400 transition {{ request()->routeIs('home') ? 'text-amber-400' : '' }}">
                HOME
            </a>
        </li>
        <li>
            <a href="{{ route('tentang') }}" class="hover:text-amber-400 transition {{ request()->routeIs('tentang') ? 'text-amber-400' : '' }}">
                TENTANG
            </a>
        </li>
        <li>
            <a href="{{ route('berita') }}" class="hover:text-amber-400 transition {{ request()->routeIs('berita') ? 'text-amber-400' : '' }}">
                BERITA
            </a>
        </li>
        <li>
            <a href="{{ route('galeri') }}" class="hover:text-amber-400 transition {{ request()->routeIs('galeri') ? 'text-amber-400' : '' }}">
                GALERI
            </a>
        </li>
        <li>
            <a href="{{ route('kontak') }}" class="hover:text-amber-400 transition {{ request()->routeIs('kontak') ? 'text-amber-400' : '' }}">
                KONTAK
            </a>
        </li>
    </ul>
</nav>