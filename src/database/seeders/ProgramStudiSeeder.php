<?php

namespace Database\Seeders;

use App\Models\ProgramStudi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramStudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Prodi di bawah Fakultas Teknologi Informasi (fakultas_id = 1)
        ProgramStudi::create([
            'fakultas_id' => 1,
            'nama_prodi' => 'Teknik Informatika',
            'jenjang' => 'S1',
            'akreditasi' => 'Unggul',
        ]);

        ProgramStudi::create([
            'fakultas_id' => 1,
            'nama_prodi' => 'Sistem Informasi',
            'jenjang' => 'S1',
            'akreditasi' => 'Baik Sekali',
        ]);

        // Prodi di bawah Fakultas Ekonomi dan Bisnis (fakultas_id = 2)
        ProgramStudi::create([
            'fakultas_id' => 2,
            'nama_prodi' => 'Manajemen',
            'jenjang' => 'S1',
            'akreditasi' => 'Unggul',
        ]);
    }
}
