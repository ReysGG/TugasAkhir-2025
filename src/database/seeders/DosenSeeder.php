<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create([
            'nama_dosen' => 'Prof. Dr. Budi Santoso',
            'nidn' => '0012345678',
            'email' => 'budi.s@example.ac.id',
            'program_studi_id' => 1,
        ]);

        Dosen::create([
            'nama_dosen' => 'Dr. Retno Wulandari',
            'nidn' => '0023456789',
            'email' => 'retno.w@example.ac.id',
            'program_studi_id' => 1,
        ]);

        // Dosen untuk Manajemen (program_studi_id = 3)
        Dosen::create([
            'nama_dosen' => 'Dr. Candra Wijaya, S.E., M.M.',
            'nidn' => '0034567890',
            'email' => 'candra.w@example.ac.id',
            'program_studi_id' => 3,
        ]);
    }
}
