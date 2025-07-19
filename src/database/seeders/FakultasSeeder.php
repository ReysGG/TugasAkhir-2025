<?php

namespace Database\Seeders;

use App\Models\Fakultas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fakultas::create([
            'nama_fakultas' => 'Fakultas Teknologi Informasi',
            'kode_fakultas' => 'FTI',
        ]);

        Fakultas::create([
            'nama_fakultas' => 'Fakultas Ekonomi dan Bisnis',
            'kode_fakultas' => 'FEB',
        ]);
    }
}
