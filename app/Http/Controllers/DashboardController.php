<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artikel;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Models\KategoriPelaporan;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_user = User::count();
        $jumlah_artikel = Artikel::count();
        $jumlah_pengaduan = Pengaduan::count();
        $jumlah_kategori_pelaporan = KategoriPelaporan::count();
        return view('admin.pages.dashboard', [
            'jumlah_user' => $jumlah_user,
            'jumlah_artikel' => $jumlah_artikel,
            'jumlah_pengaduan' => $jumlah_pengaduan,
            'jumlah_kategori_pelaporan' => $jumlah_kategori_pelaporan
        ]);
    }
}
