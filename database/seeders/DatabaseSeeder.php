<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\KategoriPelaporan;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(UserSeeder::class);
        User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin123'),
            'role' => 'superadmin',
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        KategoriPelaporan::create([
            'name' => 'Pemenuhan hak dan perlindungan khusus anak',
        ]);

        KategoriPelaporan::create([
            'name' => 'Pelecehan dan kekerasan',
        ]);

        KategoriPelaporan::create([
            'name' => 'Penyalahgunaan Napza',
        ]);

        KategoriPelaporan::create([
            'name' => 'Pernikahan usia dini',
        ]);
    }
}
