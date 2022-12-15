<?php

namespace App\Filters;

use App\Filters\contracts\QueryFilter;

class QuestionFilter extends QueryFilter
{
    public function search($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('question', 'like', '%'.$value.'%')
                ->orWhere('answer', 'like', '%'.$value.'%');
        }
        return $this->builder;
    }
}
