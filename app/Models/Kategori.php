<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public function kategoriasalmasakan() {
        return $this->hasMany('App\Models\KategoriAsalMasakan', 'kategori_id','id');
    }

    public function kategorijenismasakan() {
        return $this->hasMany('App\Models\KategoriJenisMasakan', 'kategori_id','id');
    }
}
