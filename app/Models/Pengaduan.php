<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $fillable = [
        'name',
        'email',
        'no_telp',
        'id_kategori_pelaporan',
        'subjek',
        'isi',
        'id_kecamatan',
    ];

    public function kategoripelaporan()
    {
        return $this->belongsTo(KategoriPelaporan::class, 'id_kategori_pelaporan');
    }

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
    }
}
