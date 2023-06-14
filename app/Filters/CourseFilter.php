<?php

namespace App\Filters;

use App\Filters\contracts\QueryFilter;

class CourseFilter extends QueryFilter
{
    public function search($value = null)
    {
        if (!is_null($value)) {
            return $this->builder
                ->where('title', 'like', '%'.$value.'%')
                ->orWhere('slug', 'like', '%'.$value.'%')
                ->orWhere('created_at', 'like', '%'.$value.'%');
        }
        return $this->builder;
    }
}
