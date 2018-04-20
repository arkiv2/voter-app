<?php

namespace App\Http\Controllers\Tables;

use App\Tables\Builders\VotersTable;
use LaravelEnso\VueDatatable\app\Traits\Datatable;
use LaravelEnso\VueDatatable\app\Traits\Excel;
use App\Http\Controllers\Controller;

class VotersTableController extends Controller
{
    use Datatable, Excel;

    protected $tableClass = VotersTable::class;
}
