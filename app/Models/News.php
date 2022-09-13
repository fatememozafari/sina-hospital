<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','body','writer','photographer','feedback','avatar_path1','avatar_path2','avatar_path3','instagram','facebook','twitter',
        ];
}
