<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded=['id','token'];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function replys()
    {
        return $this->morphMany(Reply::class, 'replyable');
    }
}
