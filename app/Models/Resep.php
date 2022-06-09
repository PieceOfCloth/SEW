<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $fillable = [
        "nama", "url_gambar", "deskripsi", "asal_id", "jenis_id", "user_id"
    ];
    public $timestamps = false;

    public function useraktivitasresep() {
        return $this->hasMany('App\Models\UserAktivitasResep','resep_id','id');
    }

    public function kategorijenismasakan() {
        return $this->belongsTo('App\Models\KategoriJenisMasakan','jenis_id');
    }

    public function kategoriasalmasakan() {
        return $this->belongsTo('App\Models\KategoriAsalMasakan','asal_id');
    }

    public function bahan() {
        return $this->hasMany('App\Models\Bahan','resep_id', 'id');
    }

    public function langkah() {
        return $this->hasMany('App\Models\Langkah','resep_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
