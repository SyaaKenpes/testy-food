<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Tasty Food</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
        <!-- Header Logo / Judul -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-black text-gray-900 uppercase tracking-wider">Admin Tasty Food</h1>
            <p class="text-sm text-gray-500 mt-1">Silakan masuk untuk mengelola konten website</p>
        </div>

        <!-- Pesan Error jika Login Gagal -->
        @if ($errors->any())
            <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-600 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ route('admin.login.submit') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Input Email -->
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Admin</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-300 bg-white focus:ring-2 focus:ring-amber-500 focus:border-amber-500 focus:outline-none transition"
                    placeholder="admin@tastyfood.com">
            </div>

            <!-- Input Password -->
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-3 rounded-xl border-2 border-gray-300 bg-white focus:ring-2 focus:ring-amber-500 focus:border-amber-500 focus:outline-none transition"
                    placeholder="••••••••">
            </div>

            <!-- Tombol Submit -->
            <div>
                <button type="submit" 
                    class="w-full bg-black hover:bg-gray-800 text-white font-semibold py-3.5 rounded-xl transition duration-200 uppercase tracking-widest cursor-pointer shadow-md">
                    Masuk
                </button>
            </div>
        </form>

        <!-- Kembali ke Beranda -->
        <div class="text-center mt-6">
            <a href="{{ url('/') }}" class="text-sm text-gray-500 hover:text-black transition">
                ← Kembali ke Beranda Website
            </a>
        </div>
    </div>

</body>
</html>