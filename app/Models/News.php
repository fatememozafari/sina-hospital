<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','body','writer','photographer','feedback','instagram','facebook','twitter',
        ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
