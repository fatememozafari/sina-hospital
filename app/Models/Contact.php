<?php

namespace App\Models;

use App\Filters\contracts\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory , Filterable;
    protected $fillable=[
        'name','title','message','file','user_id'
    ];
}
