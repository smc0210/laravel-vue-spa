<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function vidoes()
    {
        return $this->morphMany(Video::class, 'watchble');
    }
}
