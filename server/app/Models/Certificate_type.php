<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate_type extends Model
{
    public function category(){
        return $this->hasMany(Category::class,"category_id");
    }

    public function request_certificate(){
        return $this->hasMany(Request_Certificate::class,"certificate_type_id");
    }
}
