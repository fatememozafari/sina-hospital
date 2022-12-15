<?php

namespace App\Filters;

use App\Filters\contracts\QueryFilter;

class NewsFilter extends QueryFilter
{
    public function search($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('title', 'like', '%'.$value.'%')
                ->orWhere('body', 'like', '%'.$value.'%');
        }
        return $this->builder;
    }
}
