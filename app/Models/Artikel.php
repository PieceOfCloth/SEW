<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public function user() {
        return $this->belongsTo('App\Models\User', 'users_id');
    }
}
