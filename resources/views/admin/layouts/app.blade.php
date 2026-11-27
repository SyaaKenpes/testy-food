<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Admin - Tasty Food</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        <!-- SIDEBAR DI KIRI -->
        <aside class="w-64 bg-black text-white flex flex-col justify-between hidden md:flex shadow-xl">
            <div>
                <!-- Logo / Judul Admin -->
                <div class="px-6 py-6 border-b border-gray-800">
                    <h2 class="text-xl font-black uppercase tracking-wider text-amber-500">Tasty Admin</h2>
                    <p class="text-xs text-gray-400 mt-1">Panel Pengelola Website</p>
                </div>

                <!-- Menu Navigasi Sesuai Urutan -->
                <nav class="px-4 py-6 space-y-2">
                    <!-- 1. Tentang -->
                    <a href="{{ route('admin.tentang.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition duration-200 hover:bg-gray-800 {{ request()->routeIs('admin.tentang*') ? 'bg-amber-500 text-black font-bold' : 'text-gray-300' }}">
                        <i class="fa-solid fa-circle-info w-5"></i> Tentang
                    </a>

                    <!-- 2. Berita -->
                    <a href="{{ route('admin.berita.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition duration-200 hover:bg-gray-800 {{ request()->routeIs('admin.berita*') ? 'bg-amber-500 text-black font-bold' : 'text-gray-300' }}">
                        <i class="fa-solid fa-newspaper w-5"></i> Berita
                    </a>

                    <!-- 3. Galeri / Makanan -->
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition duration-200 hover:bg-gray-800 text-gray-300">
                        <i class="fa-solid fa-images w-5"></i> Galeri (Makanan)
                    </a>

                    <!-- 4. Kontak (Dengan Badge Notifikasi Titik Merah) -->
                    <a href="#" class="flex items-center justify-between px-4 py-3 rounded-xl text-sm font-semibold transition duration-200 hover:bg-gray-800 text-gray-300">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-address-book w-5"></i> Kontak
                        </div>
                        <!-- Contoh Badge Notifikasi (akan dinamis nanti) -->
                        <span class="bg-red-500 text-white text-xs px-2 py-0.5 rounded-full font-bold">New</span>
                    </a>
                </nav>
            </div>

            <!-- Tombol Logout di Bawah Sidebar -->
            <div class="p-4 border-t border-gray-800">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center justify-center gap-2 bg-red-600 hover:bg-red-700 text-white font-semibold py-2.5 rounded-xl transition transform hover:scale-105 shadow-md cursor-pointer">
                        <i class="fa-solid fa-right-from-bracket"></i> Keluar
                    </button>
                </form>
            </div>
        </aside>

        <!-- KONTEN UTAMA DI KANAN -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <header class="bg-white border-b border-gray-200 px-8 py-4 flex justify-between items-center shadow-sm">
                <h1 class="text-lg font-bold text-gray-800">@yield('header-title', 'Panel Admin')</h1>
                <div class="flex items-center gap-3">
                    <span class="text-sm font-medium text-gray-600">Halo, <strong>Admin</strong></span>
                    <a href="{{ url('/') }}" target="_blank" class="text-xs bg-gray-100 hover:bg-gray-200 text-gray-800 px-3 py-1.5 rounded-lg border border-gray-300 transition transform hover:scale-105">
                        Lihat Website <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i>
                    </a>
                </div>
            </header>

            <main class="p-8 flex-1">
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-green-50 border border-green-200 text-green-700 text-sm shadow-sm flex items-center justify-between">
                        <span>{{ session('success') }}</span>
                        <i class="fa-solid fa-check-circle"></i>
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

</body>
</html>