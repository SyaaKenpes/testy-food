<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TastyFoodSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data User Admin
        DB::table('users')->insert([
            'name'       => 'Admin Tasty Food',
            'email'      => 'admin@tastyfood.com',
            'password'   => Hash::make('admin123'),
            'role'       => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Data Galeri (10 Dummy Data)
        DB::table('galeris')->insert([
            [
                'judul'      => 'Menu Spesial Salad Sehat', 
                'img'        => 'img/contoh.jpeg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul'      => 'Dapur Utama Restoran',
                'img'        => 'img/tentang1.png', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul'      => 'Peluncuran Menu Baru', 
                'img'        => 'img/berita1.jpg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul'      => 'Makanan Pembuka Lezat', 
                'img'        => 'img/contoh.jpeg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul'      => 'Suasana Ruang Makan',
                'img'        => 'img/tentang1.png', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul'      => 'Proses Pembuatan Hidangan', 
                'img'        => 'img/berita1.jpg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul'      => 'Hidangan Penutup Manis', 
                'img'        => 'img/contoh.jpeg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul'      => 'Chef Profesional Kami',
                'img'        => 'img/tentang1.png', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul'      => 'Minuman Segar Spesial', 
                'img'        => 'img/berita1.jpg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul'      => 'Paket Catering Keluarga', 
                'img'        => 'img/contoh.jpeg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);

        // 3. Data Berita
        DB::table('beritas')->insert([
            [
                'is_featured' => 1, // Berita Utama (Hot News) - Card Besar
                'urutan'      => null,
                'judul'       => 'APA SAJA MAKANAN KHAS NUSANTARA?',
                'deskripsi'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.',
                'img'         => 'berita/berita1.jpg',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'is_featured' => 0, // Berita Pendukung Urutan ke-1
                'urutan'      => 1,
                'judul'       => 'LOREM IPSUM 1',
                'deskripsi'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.',
                'img'         => 'berita/berita2.jpg',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'is_featured' => 0, // Berita Pendukung Urutan ke-2
                'urutan'      => 2,
                'judul'       => 'LOREM IPSUM 2',
                'deskripsi'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.',
                'img'         => 'berita/berita3.jpg',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'is_featured' => 0, // Berita Pendukung Urutan ke-3
                'urutan'      => 3,
                'judul'       => 'LOREM IPSUM 3',
                'deskripsi'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.',
                'img'         => 'berita/berita4.jpg',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'is_featured' => 0, // Berita Pendukung Urutan ke-4
                'urutan'      => 4,
                'judul'       => 'LOREM IPSUM 4',
                'deskripsi'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.',
                'img'         => 'berita/berita5.jpg',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);

        // 4. Data Profil / Tentang
        DB::table('profiles')->insert([
            [
                'judul'      => 'Lorem ipsum', 
                'deskripsi'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.', 
                'img'        => 'img/contoh.jpeg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);

        // 5. Data Pesan Kontak
        DB::table('kontaks')->insert([
            [
                'subject'    => 'ryo ganteng',
                'nama'       => 'Budi Santoso', 
                'email'      => 'budi@gmail.com', 
                'pesan'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);
    }
}