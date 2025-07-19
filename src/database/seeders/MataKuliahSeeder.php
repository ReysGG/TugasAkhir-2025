<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // === Mata Kuliah untuk Teknik Informatika ===

        // 1. Buat mata kuliah pertama, simpan hasilnya ke variabel $mk1
        $mk1 = MataKuliah::create([
            'program_studi_id' => 1,
            'kode_mk' => 'IF101',
            'nama_matakuliah' => 'Dasar Pemrograman',
            'sks' => 4,
        ]);
        // 2. Gunakan variabel $mk1 untuk menghubungkan ke Dosen ID 1
        $mk1->dosens()->attach([1]);


        $mk2 = MataKuliah::create([
            'program_studi_id' => 1,
            'kode_mk' => 'IF102',
            'nama_matakuliah' => 'Basis Data',
            'sks' => 3,
        ]);
        // Hubungkan ke Dosen ID 1 dan 2 (team teaching)
        $mk2->dosens()->attach([1, 2]);


        // === Mata Kuliah untuk Sistem Informasi ===

        $mk3 = MataKuliah::create([
            'program_studi_id' => 2,
            'kode_mk' => 'SI101',
            'nama_matakuliah' => 'Analisis Proses Bisnis',
            'sks' => 3,
        ]);
        // Hubungkan ke Dosen ID 1 (karena Prof. Budi juga mengajar di SI)
        $mk3->dosens()->attach([1]);


        // === Mata Kuliah untuk Manajemen ===

        $mk4 = MataKuliah::create([
            'program_studi_id' => 3,
            'kode_mk' => 'MN101',
            'nama_matakuliah' => 'Manajemen Pemasaran',
            'sks' => 3,
        ]);
        // Hubungkan ke Dosen ID 3
        $mk4->dosens()->attach([3]);
    }
}
