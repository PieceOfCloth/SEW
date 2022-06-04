<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAktivitasResep extends Model
{
    public function resep() {
        return $this->belongsTo('App\Resep', 'resep_id');
    }

    public function user() {
        return $this->belongsTo('App\User','user_id');
    }
}
