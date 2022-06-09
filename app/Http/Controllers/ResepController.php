<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Langkah;
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

    public function pembuka() {
        $reseps = Resep::where('jenis_id', 1)
                    ->get();

        return view('frontend.kategori.jenis.pembuka', [
            'reseps'=>$reseps
        ]);
    }

    public function utama() {
        $reseps = Resep::where('jenis_id', 2)
                    ->get();

        return view('frontend.kategori.jenis.utama', [
            'reseps'=>$reseps
        ]);
    }

    public function penutup() {
        $reseps = Resep::where('jenis_id', 3)
                    ->get();

        return view('frontend.kategori.jenis.pembuka', [
            'reseps'=>$reseps
        ]);
    }

    public function arab() {
        $reseps = Resep::where('asal_id', 1)
                    ->get();

        return view('frontend.kategori.asal.arab', [
            'reseps'=>$reseps
        ]);
    }

    public function china() {
        $reseps = Resep::where('asal_id', 6)
                    ->get();

        return view('frontend.kategori.asal.china', [
            'reseps'=>$reseps
        ]);
    }
    public function india() {
        $reseps = Resep::where('asal_id', 2)
                    ->get();

        return view('frontend.kategori.asal.india', [
            'reseps'=>$reseps
        ]);
    }
    public function indonesia() {
        $reseps = Resep::where('asal_id', 3)
                    ->get();

        return view('frontend.kategori.asal.indonesia', [
            'reseps'=>$reseps
        ]);
    }
    public function jepang() {
        $reseps = Resep::where('asal_id', 7)
                    ->get();

        return view('frontend.kategori.asal.jepang', [
            'reseps'=>$reseps
        ]);
    }
    public function korea() {
        $reseps = Resep::where('asal_id', 4)
                    ->get();

        return view('frontend.kategori.asal.korea', [
            'reseps'=>$reseps
        ]);
    }
    public function mesir() {
        $reseps = Resep::where('asal_id', 5)
                    ->get();

        return view('frontend.kategori.asal.mesir', [
            'reseps'=>$reseps
        ]);
    }
    public function thailand() {
        $reseps = Resep::where('asal_id', 8)
                    ->get();

        return view('frontend.kategori.asal.thailand', [
            'reseps'=>$reseps
        ]);
    }

    public function add() {
        return view('frontend.create.create');
    }

    public function create(Request $request) {
        $nama = $request->input('judul');
        $url_gambar = $request->input('url_masakan');
        $deskripsi = $request->input('deskripsi');
        $asal_id = $request->input('asal');
        $jenis_id = $request->input('jenis');
        $dataResep=array('nama'=>$nama,"url_gambar"=>$url_gambar,"deskripsi"=>$deskripsi,"asal_id"=>$asal_id, "jenis_id"=>$jenis_id, "user_id"=>1);

        Resep::create($dataResep);
        Bahan::create();
        Langkah::create();
        return redirect()->route('homepage');
    }
}
