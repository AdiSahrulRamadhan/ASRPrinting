<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat user dummy
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Menambahkan data layanan printing
        Service::create([
            'name' => 'Cetak Brosur',
            'description' => 'Cetak brosur berbagai ukuran dan jenis kertas.',
            'price' => 50000
        ]);

        Service::create([
            'name' => 'Cetak Spanduk',
            'description' => 'Cetak spanduk full color dengan bahan berkualitas.',
            'price' => 150000
        ]);
    }
}
