<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.pages.data-artikel', [
            'artikel' => $artikel
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'judul.required' => 'Judul harus diisi',
            'isi.required' => 'Isi harus diisi',
            'gambar.required' => 'Gambar harus diisi',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, gif, atau svg',

        ]);

        // simpan gambar ke public/artikel/image/
        $gambar = $request->file('gambar');
        $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move('artikel/image', $namaFile);

        $artikel = new Artikel;
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->foto = $namaFile;
        $artikel->id_user = auth()->user()->id;
        $artikel->save();

        return redirect('/data-artikel')->with('store', 'Artikel berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'judul.required' => 'Judul harus diisi',
            'isi.required' => 'Isi harus diisi',
            'gambar.image' => 'File harus berupa gambar',
            'gambar.mimes' => 'File harus berupa gambar dengan format jpeg, png, jpg, gif, atau svg',

        ]);

        $artikel = Artikel::find($id);
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;

        if ($request->hasFile('gambar')) {
            // hapus gambar lama
            $gambarLama = $artikel->foto;
            unlink('artikel/image/' . $gambarLama);


            // simpan gambar baru
            $gambar = $request->file('gambar');
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('artikel/image', $namaFile);
            $artikel->foto = $namaFile;
        }

        $artikel->save();

        return redirect('/data-artikel')->with('update', 'Artikel berhasil diubah');
    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $gambar = $artikel->foto;

        unlink('artikel/image/' . $gambar);

        $artikel->delete();

        return redirect('/data-artikel')->with('destroy', 'Artikel berhasil dihapus');
    }
}
