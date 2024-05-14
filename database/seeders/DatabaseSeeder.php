<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\KategoriPelaporan;
use App\Models\Kecamatan;
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

        Kecamatan::create([
            'name' => 'Bangil',
        ]);

        Kecamatan::create([
            'name' => 'Beji',
        ]);

        Kecamatan::create([
            'name' => 'Gempol',
        ]);

        Kecamatan::create([
            'name' => 'Gondangwetan',
        ]);

        Kecamatan::create([
            'name' => 'Grati',
        ]);

        Kecamatan::create([
            'name' => 'Kejayan',
        ]);

        Kecamatan::create([
            'name' => 'Kraton',
        ]);

        Kecamatan::create([
            'name' => 'Lekok',
        ]);

        Kecamatan::create([
            'name' => 'Nguling',
        ]);

        Kecamatan::create([
            'name' => 'Pandaan',
        ]);

        Kecamatan::create([
            'name' => 'Pasrepan',
        ]);

        Kecamatan::create([
            'name' => 'Prigen',
        ]);

        Kecamatan::create([
            'name' => 'Pujon',
        ]);

        Kecamatan::create([
            'name' => 'Purwodadi',
        ]);

        Kecamatan::create([
            'name' => 'Purwosari',
        ]);

        Kecamatan::create([
            'name' => 'Puspo',
        ]);

        Kecamatan::create([
            'name' => 'Paiton',
        ]);

        Kecamatan::create([
            'name' => 'Pohjentrek',
        ]);

        Kecamatan::create([
            'name' => 'Rembang',
        ]);

        Kecamatan::create([
            'name' => 'Rejoso',
        ]);

        Kecamatan::create([
            'name' => 'Sumberasih',
        ]);

        Kecamatan::create([
            'name' => 'Sukorejo',
        ]);

        Kecamatan::create([
            'name' => 'Tosari',
        ]);

        Kecamatan::create([
            'name' => 'Tutur',
        ]);
    }
}
