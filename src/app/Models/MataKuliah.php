<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{

    use HasFactory;
    protected $fillable = [
        'program_studi_id',
        'kode_mk',
        'nama_matakuliah',
        'sks',
        'dosen_mata_kuliah', // Assuming this is the pivot table name
    ];

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }

    public function dosens()
    {
        return $this->belongsToMany(Dosen::class, 'dosen_mata_kuliah');
    }
}
