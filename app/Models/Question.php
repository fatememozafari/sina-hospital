<?php

namespace App\Models;

use App\Filters\contracts\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory , Filterable;
    protected $fillable=[
        'question', 'answer', 'file'
    ];
}
