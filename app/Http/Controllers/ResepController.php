<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index() {
        $reseps = Resep::all();

        return view('frontend.resep.index', compact('reseps'));
    }
    
    public function show(Resep $resep) {
        dd($resep);

        return view('frontend.resep.show', compact('data'));
    }
}
