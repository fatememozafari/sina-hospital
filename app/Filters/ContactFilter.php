<?php

namespace App\Filters;

use App\Filters\contracts\QueryFilter;

class ContactFilter extends QueryFilter
{
    public function search($value = null)
    {
        if (!is_null($value)) {
            return $this->builder
                ->where('title', 'like', '%'.$value.'%')
                ->orWhere('name', 'like', '%'.$value.'%')
                ->orWhere('message', 'like', '%'.$value.'%')
                ->orWhere('created_at', 'like', '%'.$value.'%');
        }
        return $this->builder;
    }
}
