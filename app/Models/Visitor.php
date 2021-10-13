<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{

    use HasFactory;

    // protected $table = 'visitors';

    // Mass assignment
    protected $fillable = [
        'mykad',
        'nama',
        'jabatan',
        'no_telefon',
        'aktiviti',
        'no_kad_akses',
        'no_locker',
        'no_rak',
        'pegawai_pengiring',
        'waktu_masuk',
        'waktu_keluar'
    ];

    // Accessor
    public function getNamaAttribute($value)
    {
        return strtoupper($value);
    }

    // Mutatators
    public function setJabatanAttribute($value)
    {
        $this->attributes['jabatan'] = strtoupper($value);
    }
}
