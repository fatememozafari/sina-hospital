<?php

namespace App\Models;

use App\Filters\contracts\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory, Filterable;
    protected $fillable=[
        'title','slug','type','start_at','description','file','teacher_id','user_id','duration'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function score()
    {
        return $this->hasMany(Score::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

}
