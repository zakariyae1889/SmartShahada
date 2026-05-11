<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    public function users(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function notifications(){
        return $this->hasMany(Notification::class,"citizen_id");
    }

    public function request_certificate(){
        return $this->hasMany(Request_Certificate::class,"citizen_id");
    }

    public function reviews(){
        return $this->hasMany(Review::class,"citizen_id");
    }
}
