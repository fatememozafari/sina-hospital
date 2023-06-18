<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','family',
        'gender','mobile','email'
        ,'password','password_confirmation',
        'address','avatar_path','role_id','rate',
        'user_id',
        ];
    public function courses()
    {
        return $this->hasMany(Course::class,'teacher_id');
    }
}
