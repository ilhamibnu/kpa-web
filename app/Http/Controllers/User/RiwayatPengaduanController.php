<?php

namespace App\Http\Controllers\User;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiwayatPengaduanController extends Controller
{
    public function index()
    {
        $riwayatPengaduan = Pengaduan::where('id_user', auth()->user()->id)->get();
        return view('landing.pages.riwayat-pengaduan', [
            'riwayatPengaduan' => $riwayatPengaduan
        ]);
    }
}
