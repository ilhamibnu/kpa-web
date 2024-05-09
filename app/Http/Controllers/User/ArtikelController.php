<?php

namespace App\Http\Controllers\User;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('landing.pages.artikel', [
            'artikel' => $artikel
        ]);
    }

    public function detail($id)
    {
        $artikel = Artikel::find($id);
        return view('landing.pages.detail-artikel', [
            'artikel' => $artikel
        ]);
    }
}
