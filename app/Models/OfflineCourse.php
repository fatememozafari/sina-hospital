<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfflineCourse extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_code','title','slug','type','start_at','description','rate','file_type','teacher_id','user_id'
    ];
    protected $guarded=['id'];

    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
