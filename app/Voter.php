<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Ordered;
use App\Candidate;
use Carbon\Carbon;
use App\Traits\Sourced;

class Voter extends Model
{
    use Sourced;

    protected $fillable = ['first_name', 'last_name', 'zone', 'precint_number'];

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

    public function votingStatus()
    {
        return $this->belongsToMany(Status::class);
    }

    public function votedCandidates()
    {
        return $this->belongsToMany(Candidate::class, 'votes')->withPivot('posted_at');
    }

    public function votesToday()
    {
        return $this->votedCandidates()->wherePivot('posted_at', '=', Carbon::now()->format('Y-m-d'));
    }

    public function votedCandidateToday(Candidate $candidate)
    {
        return !! $this->votesToday()->wherePivot('candidate_id', $candidate->id)->count();
    }

    public function vote(Candidate $candidate)
    {
        if($this->votedCandidateToday($candidate))
        {
            return response()->json(['error' => 'You already voted '. $candidate->last_name . ' today'], 403);

        }
        $this->acquire();
        return $candidate->votes()->attach($this->id, [
            'posted_at' => Carbon::now()
        ]);
    }
}
