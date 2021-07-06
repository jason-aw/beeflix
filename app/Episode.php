<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    // Relation with Movie
    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
