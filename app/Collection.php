<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    public function vidoes()
    {
        return $this->morphMany(Video::class, 'watchble');
    }
}
