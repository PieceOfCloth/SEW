<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table ="users";

    public function role() {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function useraktivitasresep() {
        return $this->hasMany('App\UserAktivitasResep','user_id','id');
    }
}
