<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $table = 'kecamatan';

    protected $fillable = [
        'name',
    ];

    public function pelaporan()
    {
        return $this->hasMany(Pengaduan::class, 'id_kecamatan');
    }
}
