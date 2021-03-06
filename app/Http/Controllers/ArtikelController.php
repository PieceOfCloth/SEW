<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index() {
        $artikels = Artikel::all();

        return view('frontend.artikel.index', compact('artikels'));
    }

    public function show(Artikel $artikel) {
        return view('frontend.artikel.show', [
            'arti'=>$artikel
        ]);
    }
}
