<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
     public function citizen(){
        return $this->hasMany(Citizen::class,"citizen_id");
    }
}
