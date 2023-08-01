<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfflineCourse extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','slug','type','start_at','description','rate','teacher_id','user_id'
    ];
    protected $guarded=['id'];

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
