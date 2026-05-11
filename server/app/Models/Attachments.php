<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    public function attachments(){
        return $this->hasManyTo(Attachments::class,"request_id");
    }
}
