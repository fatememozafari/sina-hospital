<?php

namespace App\Models\Notify;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $table='public_mail';

    protected $guarded=['id'];

    public function mailFiles()
    {
        return $this->hasMany(EmailFile::class,'public_mail_id');
    }
}
