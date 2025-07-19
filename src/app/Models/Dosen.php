<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_dosen',
        'nidn',
        'email',
        'program_studi_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }

    public function mataKuliahs()
    {
        return $this->belongsToMany(MataKuliah::class, 'dosen_mata_kuliah');
    }
}
