<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Carbon\Carbon;

class Vote extends Pivot
{
    public function scopeGrouped($query)
    {
        return $query->groupBy(function($item) {
            return Carbon::createFromFormat('Y-m-d', $item->posted_at)->format('F, Y m d');
        });
    }
}
