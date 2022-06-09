<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Resep;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index() {
        $reseps = Resep::all();

        $peringkat = Resep::orderByDesc('sukai')
                    ->take(6)
                    ->get();

        $artikel = Artikel::take(3)
                    ->get();

        return view('frontend.homepage', [
            'reseps'=>$reseps,
            'peringkat'=>$peringkat,
            'artikel'=>$artikel
        ]);
    }
}
