<?php

namespace App\Models;

use App\Filters\contracts\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory, Filterable;

    protected $fillable = [
        'title', 'body', 'writer', 'photographer', 'feedback', 'instagram',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
