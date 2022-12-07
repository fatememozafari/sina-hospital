<?php

namespace App\Filters\contracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class QueryFilter
{
    private $request;
    protected $builder;

    public function __construct()
    {
        $this->request = Request::capture();
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;
        foreach ($this->filters() as $key => $value) {
            if (!method_exists($this, $key)) {
                continue;
            }
            (!is_null($value)) ? $this->{$key}($value) : $this->{$key}();
        }
    }

    public function filters()
    {
        return \request()->all();
    }
}
