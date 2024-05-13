<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::all();
        return view('admin.pages.data-kecamatan', [
            'kecamatan' => $kecamatan,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama kecamatan harus diisi',

        ]);

        Kecamatan::create([
            'name' => $request->name,
        ]);

        return redirect('/data-kecamatan')->with('store', 'Data kecamatan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama kecamatan harus diisi',
        ]);

        Kecamatan::where('id', $id)->update([
            'name' => $request->name,
        ]);

        return redirect('/data-kecamatan')->with('update', 'Data kecamatan berhasil diubah');
    }

    public function destroy($id)
    {
        $cek_pengaduan = Pengaduan::where('id_kecamatan', $id)->count();
        if ($cek_pengaduan > 0) {
            return redirect('/data-kecamatan')->with('gagal', 'Data kecamatan gagal dihapus, karena data kecamatan masih digunakan');
        } else {
            Kecamatan::destroy($id);
            return redirect('/data-kecamatan')->with('delete', 'Data kecamatan berhasil dihapus');
        }
    }
}
