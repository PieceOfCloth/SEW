<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    public function resep() {
        return $this->belongsTo('App\Models\Resep','resep_id');
    }
}
