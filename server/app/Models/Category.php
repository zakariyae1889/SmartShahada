<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function users(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function certificate_type(){
        return $this->hasMany(Certificate_type::class,"category_id");
    }
}
