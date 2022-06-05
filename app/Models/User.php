<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table ="users";

    public function role() {
        return $this->belongsTo('App\Models\Role', 'role_id');
    }

    public function useraktivitasresep() {
        return $this->hasMany('App\Models\UserAktivitasResep','user_id','id');
    }

    public function resep() {
        return $this->hasMany('App\Models\Resep', 'user_id', 'id');
    }

    public function artikel() {
        return $this->hasMany('App\Models\Artikel', 'users_id', 'id');
    }
}
