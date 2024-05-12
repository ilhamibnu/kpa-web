<?php

namespace App\Http\Controllers;

use App\Models\KategoriPelaporan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;


class KategoriPelaporanController extends Controller
{
    public function index()
    {
        $kategori_pelaporan = KategoriPelaporan::all();
        return view('admin.pages.data-kategori-pelaporan', [
            'kategori_pelaporan' => $kategori_pelaporan
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama Kategori Pelaporan harus diisi'
        ]);

        $kategori_pelaporan = new KategoriPelaporan();
        $kategori_pelaporan->name = $request->name;
        $kategori_pelaporan->save();

        return redirect('/data-kategori-pelaporan')->with('store', 'Kategori Pelaporan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ], [
            'name.required' => 'Nama Kategori Pelaporan harus diisi'
        ]);

        $kategori_pelaporan = KategoriPelaporan::find($id);
        $kategori_pelaporan->name = $request->name;
        $kategori_pelaporan->save();

        return redirect('/data-kategori-pelaporan')->with('update', 'Kategori Pelaporan berhasil diubah');
    }


    public function destroy($id)
    {
        if (Pengaduan::where('id_kategori_pelaporan', $id)->exists()) {
            return redirect('/data-kategori-pelaporan')->with('gagal', 'Kategori Pelaporan gagal dihapus');
        }

        $kategori_pelaporan = KategoriPelaporan::find($id);
        $kategori_pelaporan->delete();

        return redirect('/data-kategori-pelaporan')->with('destroy', 'Kategori Pelaporan berhasil dihapus');
    }
}
