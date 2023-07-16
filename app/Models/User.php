<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Ticket\Ticket;
use App\Models\Ticket\TicketAdmin;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name','family','melli_code',
        'gender','mobile','email',
        'password','password_confirmation',
        'address','avatar_path','role_id','rate',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function courses()
    {
        return $this->belongsToMany(Course::class,'course_user','user_id','course_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function scores()
    {
        return $this->belongsToMany(Score::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function getFullNameAttribute()
    {
        return "{$this->name}"." "."{$this->family}";
    }

    public function ticketAdmin()
    {
        return $this->hasOne(TicketAdmin::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class,'ticket_id');
    }

}
