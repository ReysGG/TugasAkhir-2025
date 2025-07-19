<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $fillable = [
        'program_studi_id',
        'kode_mk',
        'nama_matakuliah',
        'sks',
    ];

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }
}
