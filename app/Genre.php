<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    // One to many relationship, 1 genre many movie
    public function movies() {
        return $this->hasMany(Movie::class);
    }
}
