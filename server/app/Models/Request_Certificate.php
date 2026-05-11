<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request_Certificate extends Model
{
    public function citizen(){
        return $this->belongsTo(Citizen::class,"citizen_id");
    }
    public function adminstration(){
        return $this->belongsTo(Citizen::class,"adminstration_id");
    }

    public function certificate_type(){
        return $this->belongsTo(Citizen::class,"certificate_type_id");
    }

    public function certificate(){
        return $this->hasManyTo(Certificate::class,"request_id");
    }

    public function attachments(){
        return $this->hasManyTo(Attachments::class,"request_id");
    }
    public function reviews(){
        return $this->hasMany(Review::class,"request_id");
    }

}
