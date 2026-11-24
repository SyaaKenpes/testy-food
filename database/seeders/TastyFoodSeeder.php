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
            'name' => 'Admin Tasty Food',
            'email' => 'admin@tastyfood.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Data Makanan
        DB::table('makanans')->insert([
            [
                'nama' => 'Lorem ipsum', 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 
                'img' => 'img/contoh.jpeg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'nama' => 'Lorem ipsum', 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 
                'img' => 'img/tentang1.png', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'nama' => 'Lorem ipsum', 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 
                'img' => 'img/berita1.jpg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);

        // 3. Data Berita
        DB::table('beritas')->insert([
            [
                'judul' => 'Lorem ipsum', 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.', 
                'img' => 'img/berita1.jpg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul' => 'Lorem ipsum', 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.', 
                'img' => 'img/berita2.jpg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul' => 'Lorem ipsum', 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.', 
                'img' => 'img/berita3.jpg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul' => 'Lorem ipsum', 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.', 
                'img' => 'img/berita4.jpg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
            [
                'judul' => 'Lorem ipsum', 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.', 
                'img' => 'img/berita5.jpg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);

        // 4. Data Profil / Tentang
        DB::table('profiles')->insert([
            [
                'judul' => 'Lorem ipsum', 
                'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.', 
                'img' => 'img/contoh.jpeg', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);

        // 5. Data Pesan Kontak
        DB::table('kontaks')->insert([
            [
                'subject' => 'ryo ganteng',
                'nama' => 'Budi Santoso', 
                'email' => 'budi@gmail.com', 
                'pesan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent mauris.', 
                'created_at' => now(), 
                'updated_at' => now()
            ],
        ]);

        
    }
}