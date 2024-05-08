<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('admin.pages.data-pengaduan', [
            'pengaduan' => $pengaduan
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'subjek' => 'required',
            'isi' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'no_telp.required' => 'No. Telp harus diisi',
            'subjek.required' => 'Subjek harus diisi',
            'isi.required' => 'Isi harus diisi',
        ]);

        $pengaduan = new Pengaduan;
        $pengaduan->name = $request->name;
        $pengaduan->email = $request->email;
        $pengaduan->no_telp = $request->no_telp;
        $pengaduan->subjek = $request->subjek;
        $pengaduan->isi = $request->isi;
        $pengaduan->id_user = auth()->user()->id;
        $pengaduan->save();

        return redirect('/data-pengaduan')->with('store', 'Pengaduan berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'subjek' => 'required',
            'isi' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'no_telp.required' => 'No. Telp harus diisi',
            'subjek.required' => 'Subjek harus diisi',
            'isi.required' => 'Isi harus diisi',
        ]);

        $pengaduan = Pengaduan::find($id);
        $pengaduan->name = $request->name;
        $pengaduan->email = $request->email;
        $pengaduan->no_telp = $request->no_telp;
        $pengaduan->subjek = $request->subjek;
        $pengaduan->isi = $request->isi;
        $pengaduan->id_user = auth()->user()->id;
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
