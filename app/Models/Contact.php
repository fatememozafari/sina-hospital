<?php

namespace App\Models;

use App\Filters\contracts\Filterable;
use App\Presenters\ContactPresenter;
use App\presenters\contracts\Presentable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory , Filterable , Presentable;
    public $presenter = ContactPresenter::class;

    protected $fillable=[
        'name','title','message','user_id'
    ];

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

}
