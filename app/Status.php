<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function voters()
    {
        return $this->belongsToMany(Voter::class);
    }
}
