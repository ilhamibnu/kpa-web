<?php

namespace App\Http\Controllers\User;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiwayatPengaduanController extends Controller
{
    public function index(Request $request)
    {
        $jumlah_data = Pengaduan::where('id_user', auth()->user()->id)->count();
        $riwayatPengaduan = Pengaduan::where('id_user', auth()->user()->id)->orderBy('id', 'desc')->paginate(3);

        if ($request->ajax()) {
            $view = view('landing.data.riwayat-pengaduan', [
                'riwayatPengaduan' => $riwayatPengaduan
            ])->render();
            return response()->json(['html' => $view]);
        }


        return view('landing.pages.riwayat-pengaduan', [
            'riwayatPengaduan' => $riwayatPengaduan,
            'jumlah_data' => $jumlah_data
        ]);
    }
}
