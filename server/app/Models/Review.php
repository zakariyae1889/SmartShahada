<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function request_certificate(){
        return $this->hasMany(Review::class,"request_id");
    }

    public function citizen(){
        return $this->hasMany(Review::class,"citizen_id");
    }
}
