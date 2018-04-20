<?php

namespace App\Tables\Builders;

use App\Voter;
use LaravelEnso\VueDatatable\app\Classes\Table;

class VotersTable extends Table
{
    protected $templatePath = __DIR__ . '/../Templates/voters.json';

    public function query()
    {
        return Voter::select(\DB::raw(
            'voters.id as "dtRowId", voters.first_name, voters.last_name, voters.precint_number,
                voters.zone, voters.source_type, voters.source_id, voters.acquired'
        ));
    }
}
