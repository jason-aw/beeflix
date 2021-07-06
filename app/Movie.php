<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // Relation with genre
    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    // Relation with episodes, 1 movie many episodes
    public function episodes() {
        return $this->hasMany(Episode::class);
    }
}
