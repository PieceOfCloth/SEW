<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriAsalMasakan extends Model
{
    public function kategori() {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id');
    }

    public function resep() {
        return $this->hasMany('App\Models\Resep', 'asal_id', 'id');
    }
}
