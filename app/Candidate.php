<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Ordered;
use Carbon\Carbon;

class Candidate extends Model
{   
    public function voters()
    {
        return $this->morphMany(Voter::class, 'source');
    }

    public function votes()
    {
        return $this->belongsToMany(Voter::class, 'votes')->withPivot('posted_at');
    }

    public function votesToday()
    {
        return $this->votes()->wherePivot('posted_at', '=', Carbon::now())->get();
    }
}
