<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_code','title','slug','type','start_at','description','file','teacher_id'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function scores()
    {
        return $this->hasOne(Score::class);
    }
}
