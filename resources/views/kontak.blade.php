<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food - Kontak Kami</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome untuk ikon sosial media & kontak -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-white text-gray-800 antialiased">
    @include('layouts.navbar')

    <!-- 1. HERO BANNER ATAS -->
    <div class="relative w-full h-[450px] bg-cover bg-center flex flex-col justify-between p-6 md:px-16"
        style="background-image: url('{{ asset('img/contoh.jpeg') }}'); background-color: rgba(0,0,0,0.6); background-blend-mode: overlay;">

        <!-- Judul Banner (Disesuaikan proporsinya) -->
        <div class="mt-auto pb-40 w-full">
            <h1 class="text-white text-4xl md:text-5xl font-black uppercase tracking-wide">
                Kontak Kami
            </h1>
        </div>
    </div>

    <!-- 2. MAIN SECTION: FORM & INFO -->
    <section class="py-24 bg-gray-100">
        <div class="max-w-5xl mx-auto px-6 md:px-12">
            
            <h2 class="text-3xl md:text-4xl font-extrabold text-black uppercase mb-10">
                Kontak Kami
            </h2>

            {{-- Notifikasi Sukses --}}
            @if (session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-100 border border-green-400 text-green-700">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Form Kontak (Sesuai Desain: Subject & Message di atas, Nama & Email di bawah) --}}
            <form action="{{ route('kontak.store') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Kolom Kiri: Subject, Nama, Email -->
                    <div class="space-y-6">
                        <div>
                            <input type="text" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject" required
                                class="w-full px-5 py-4 text-base rounded-lg border-2 border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
                            @error('subject') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Name" required
                                class="w-full px-5 py-4 text-base rounded-lg border-2 border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
                            @error('nama') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Email" required
                                class="w-full px-5 py-4 text-base rounded-lg border-2 border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">
                            @error('email') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <!-- Kolom Kanan: Message Textarea -->
                    <div>
                        <textarea name="pesan" id="pesan" rows="7" placeholder="Message" required
                            class="w-full px-5 py-4 text-base rounded-lg border-2 border-gray-300 focus:ring-2 focus:ring-amber-500 focus:outline-none">{{ old('pesan') }}</textarea>
                        @error('pesan') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Tombol Kirim Hitam Sesuai Desain -->
                <div>
                    <button type="submit" class="w-full bg-black hover:bg-gray-800 text-white font-semibold py-3.5 rounded-lg transition duration-200 uppercase tracking-widest cursor-pointer">
                        Kirim
                    </button>
                </div>
            </form>

            <!-- Informasi Kontak (Email, Phone, Location) Menggunakan FontAwesome -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center my-20">
                <!-- Email -->
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 bg-black text-white rounded-full flex items-center justify-center mb-4 text-xl">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 uppercase tracking-wider mb-1">Email</h3>
                    <p class="text-gray-600 text-sm">tastyfood@gmail.com</p>
                </div>

                <!-- Phone -->
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 bg-black text-white rounded-full flex items-center justify-center mb-4 text-xl">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 uppercase tracking-wider mb-1">Phone</h3>
                    <p class="text-gray-600 text-sm">+62 812 3456 7890</p>
                </div>

                <!-- Location -->
                <div class="flex flex-col items-center">
                    <div class="w-14 h-14 bg-black text-white rounded-full flex items-center justify-center mb-4 text-xl">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3 class="font-bold text-gray-800 uppercase tracking-wider mb-1">Location</h3>
                    <p class="text-gray-600 text-sm">Kota Bandung, Jawa Barat</p>
                </div>
            </div>

            <!-- Google Maps Embed -->
            <div class="w-full h-96 rounded-2xl overflow-hidden shadow-lg border-2 border-gray-200 bg-white">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6784284455457!2d106.82781827475262!3d-6.435333793555867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb00524296a7%3A0x7b999857495c20a8!2sMessi%20pernah%20sekolah%20disini!5e0!3m2!1sid!2sid!4v1795521715807!5m2!1sid!2sid" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"> 
                </iframe>
            </div>

        </div>
    </section>

    <!-- 3. FOOTER -->
    @include('layouts.app')

</body>

</html>