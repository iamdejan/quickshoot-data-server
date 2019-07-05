<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];

    public function users() {
        return $this->belongsToMany("App\User")->withPivot("shoot_time");
    }
}
