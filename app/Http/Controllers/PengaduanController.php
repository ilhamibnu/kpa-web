<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use App\Models\KategoriPelaporan;

class PengaduanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::all();
        $kategori_pelaporan = KategoriPelaporan::all();
        $pengaduan = Pengaduan::all();
        return view('admin.pages.data-pengaduan', [
            'pengaduan' => $pengaduan,
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
            'jenis_kelamin' => 'required', // 'jenis' => 'required
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
            'jenis_kelamin.required' => 'Jenis Kelamin harus diisi',
            'id_kategori_pelaporan.required' => 'Kategori Pelaporan harus diisi',
            // 'subjek.required' => 'Subjek harus diisi',
            'isi.required' => 'Isi harus diisi',
            'id_kecamatan.required' => 'Kecamatan harus diisi',
            'status.required' => 'Status harus diisi',
        ]);

        $pengaduan = new Pengaduan;
        $pengaduan->name = $request->name;
        $pengaduan->email = $request->email;
        $pengaduan->no_telp = $request->no_telp;
        $pengaduan->jenis_kelamin = $request->jenis_kelamin;
        $pengaduan->id_kategori_pelaporan = $request->id_kategori_pelaporan;
        // $pengaduan->subjek = $request->subjek;
        $pengaduan->isi = $request->isi;
        $pengaduan->id_kecamatan = $request->id_kecamatan;
        $pengaduan->status = $request->status;
        // $pengaduan->id_user = auth()->user()->id;
        $pengaduan->save();

        return redirect('/data-pengaduan')->with('store', 'Pengaduan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // 'name' => 'required',
            // 'email' => 'required|email',
            // 'no_telp' => 'required',
            // 'jenis_kelamin' => 'required', // 'jenis' => 'required
            // 'id_kategori_pelaporan' => 'required', // 'jenis' => 'required
            // // 'subjek' => 'required',
            // 'isi' => 'required',
            // 'id_kecamatan' => 'required',
            'status' => 'required',
        ], [
            // 'name.required' => 'Nama harus diisi',
            // 'email.required' => 'Email harus diisi',
            // 'email.email' => 'Email tidak valid',
            // 'no_telp.required' => 'No. Telp harus diisi',
            // 'jenis_kelamin.required' => 'Jenis Kelamin harus diisi',
            // 'id_kategori_pelaporan.required' => 'Kategori Pelaporan harus diisi',
            // // 'subjek.required' => 'Subjek harus diisi',
            // 'isi.required' => 'Isi harus diisi',
            // 'id_kecamatan.required' => 'Kecamatan harus diisi',
            'status.required' => 'Status harus diisi',
        ]);

        $pengaduan = Pengaduan::find($id);
        // $pengaduan->name = $request->name;
        // $pengaduan->email = $request->email;
        // $pengaduan->no_telp = $request->no_telp;
        // $pengaduan->jenis_kelamin = $request->jenis_kelamin;
        // $pengaduan->id_kategori_pelaporan = $request->id_kategori_pelaporan;
        // // $pengaduan->subjek = $request->subjek;
        // $pengaduan->isi = $request->isi;
        // $pengaduan->id_kecamatan = $request->id_kecamatan;
        $pengaduan->status = $request->status;
        // $pengaduan->id_user = auth()->user()->id;
        $pengaduan->save();

        return redirect('/data-pengaduan')->with('update', 'Pengaduan berhasil diubah');
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        return redirect('/data-pengaduan')->with('destroy', 'Pengaduan berhasil dihapus');
    }
}
