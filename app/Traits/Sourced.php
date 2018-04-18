<?php

namespace App\Traits;

trait Sourced {

    public function acquire()
    {
        $this->acquired = true;
        return $this->save();
    }
    
}