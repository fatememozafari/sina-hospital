<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','family','melli_code','gender','mobile','email','birthday','job','password','password_verification','address','avatar_path','type','rate'
    ];

}
