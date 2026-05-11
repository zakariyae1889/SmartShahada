<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function regions(){
        return $this->belongsTo(Region::class,'region_id');
    }

    public function users(){
        return $this->belongsTo(User::class,"city_id");
    }
}
