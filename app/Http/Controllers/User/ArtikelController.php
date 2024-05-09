<?php

namespace App\Http\Controllers\User;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $jumlah_data = Artikel::count();
        $artikel = Artikel::paginate(3);

        if ($request->ajax()) {
            $view = view('landing.data.artikel', [
                'artikel' => $artikel
            ])->render();
            return response()->json(['html' => $view]);
        }

        return view('landing.pages.artikel', [
            'artikel' => $artikel,
            'jumlah_data' => $jumlah_data
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
