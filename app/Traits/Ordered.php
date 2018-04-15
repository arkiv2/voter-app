<?php

namespace App\Traits;

trait Ordered {
    protected $orderBy = 'last_name';
    protected $orderDirection = 'asc';

    public function newQuery($ordered = true)
    {
        $query = parent::newQuery();

        if(empty($ordered))
        {
            return $query;
        }

        return $query->orderBy($this->orderBy, $this->orderDirection);
    }
}