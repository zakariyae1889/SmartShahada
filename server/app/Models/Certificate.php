<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
  public function requestCertificate(){
    return $this->belongsTo(Request_Certificate::class,"request_id");
  }
}
