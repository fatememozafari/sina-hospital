<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','slug','type','start_at','description','file','duration','teacher','user_id'
    ];
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
