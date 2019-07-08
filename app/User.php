<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public function matches() {
        return $this->belongsToMany("App\Room")->withPivot("shoot_time");
    }
}
