<?php

namespace App\Filters\contracts;

trait Filterable
{
    public function scopeFilter($query, QueryFilter $queryFilter)
    {
        return $queryFilter->apply($query);
    }
}
