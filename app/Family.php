<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    public function voters()
    {
        return $this->morphMany(Voter::class, 'source');
    }
}
