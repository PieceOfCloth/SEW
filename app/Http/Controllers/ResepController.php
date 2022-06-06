<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index() {
        $reseps = Resep::all();

        $peringkat = Resep::orderByDesc('sukai')
                    ->take(3)
                    ->get();

        return view('frontend.resep.index', [
            'reseps'=>$reseps,
            'peringkat'=>$peringkat
        ]);
    }
    
    public function show(Resep $resep) {
        return view('frontend.resep.show', [
            'resep'=>$resep
        ]);
    }
}
