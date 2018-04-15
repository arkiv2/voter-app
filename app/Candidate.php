<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Ordered;

class Candidate extends Model
{
    use Ordered;
    
    public function voters()
    {
        return $this->morphMany(Voter::class, 'source');
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
