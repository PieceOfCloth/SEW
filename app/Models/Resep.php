<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    public function useraktivitasresep() {
        return $this->hasMany('App\UserAktivitasResep','resep_id','id');
    }
}
