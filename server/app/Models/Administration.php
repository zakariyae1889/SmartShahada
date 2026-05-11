<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    public function users(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function request_certificate(){
        return $this->hasMany(Request_Certificate::class,"adminstration_id");
    }

}
