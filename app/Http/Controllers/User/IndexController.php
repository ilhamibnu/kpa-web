<?php

namespace App\Http\Controllers\User;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('id', 'desc')->limit(3)->get();
        return view('landing.pages.index', [
            'artikel' => $artikel
        ]);
    }
}
