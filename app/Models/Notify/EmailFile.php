<?php

namespace App\Models\Notify;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailFile extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    protected $table='public_mail_files';

    public function email()
    {
        return $this->belongsTo(Email::class,'id');
    }
}
