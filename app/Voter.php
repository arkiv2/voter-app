<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Ordered;

class Voter extends Model
{
    use Ordered;

    public function status()
    {
        return !! $this->acquired;
    }

    public function source()
    {
        return $this->morphTo();
    }

    public function scopeGrouped($query)
    {
        return false;
    }
}
