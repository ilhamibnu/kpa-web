<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPelaporan extends Model
{
    use HasFactory;

    protected $table = 'kategori_pelaporan';

    protected $fillable = [
        'name'
    ];

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class, 'id_kategori_pelaporan');
    }
}
