<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MataKuliah::create([
            'program_studi_id' => 1,
            'kode_mk' => 'IF101',
            'nama_matakuliah' => 'Dasar Pemrograman',
            'sks' => 4,
        ]);

        MataKuliah::create([
            'program_studi_id' => 1,
            'kode_mk' => 'IF102',
            'nama_matakuliah' => 'Basis Data',
            'sks' => 3,
        ]);

        // Mata Kuliah untuk Sistem Informasi (program_studi_id = 2)
        MataKuliah::create([
            'program_studi_id' => 2,
            'kode_mk' => 'SI101',
            'nama_matakuliah' => 'Analisis Proses Bisnis',
            'sks' => 3,
        ]);

        // Mata Kuliah untuk Manajemen (program_studi_id = 3)
        MataKuliah::create([
            'program_studi_id' => 3,
            'kode_mk' => 'MN101',
            'nama_matakuliah' => 'Manajemen Pemasaran',
            'sks' => 3,
        ]);
    }
}
