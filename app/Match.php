<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $guarded = [];

    public function users() {
        return $this->belongsToMany("App\User")->withPivot("shoot_time");
    }
}
