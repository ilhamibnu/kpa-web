<?php

namespace App\Http\Controllers\User;

use App\Models\Kecamatan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Models\KategoriPelaporan;
use App\Http\Controllers\Controller;

class PengaduanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::all();
        $kategori_pelaporan = KategoriPelaporan::all();
        return view('landing.pages.pengaduan', [
            'kategori_pelaporan' => $kategori_pelaporan,
            'kecamatan' => $kecamatan,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'id_kategori_pelaporan' => 'required', // 'jenis' => 'required
            // 'subjek' => 'required',
            'isi' => 'required',
            'id_kecamatan' => 'required',
            'status' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'no_telp.required' => 'No. Telp harus diisi',
            'id_kategori_pelaporan.required' => 'Kategori Pelaporan harus diisi',
            'subjek.required' => 'Subjek harus diisi',
            'isi.required' => 'Isi harus diisi',
            'id_kecamatan.required' => 'Kecamatan harus diisi',
            'status.required' => 'Status harus diisi',
        ]);

        $pengaduan = new Pengaduan;
        $pengaduan->name = $request->name;
        $pengaduan->email = $request->email;
        $pengaduan->no_telp = $request->no_telp;
        $pengaduan->id_kategori_pelaporan = $request->id_kategori_pelaporan;
        // $pengaduan->subjek = $request->subjek;
        $pengaduan->isi = $request->isi;
        $pengaduan->id_kecamatan = $request->id_kecamatan;
        $pengaduan->status = 'pending';
        // $pengaduan->id_user = auth()->user()->id;
        $pengaduan->save();

        return redirect('/user/pengaduan')->with('pengaduan', 'Pengaduan berhasil ditambahkan');
    }
}
