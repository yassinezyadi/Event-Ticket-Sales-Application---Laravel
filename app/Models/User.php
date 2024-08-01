<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Session;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    
    public static function isConnected() {
        return Session::get('email') !== null;
    }

    protected $fillable = [
        'firstName',
        'lastName',
        'phone',
        'email',
        'username',
        'email',
        'password',
        'phone',
        'role',
        'key',
        'reset_token',
        'token_expires_at'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function events()
    {
        return $this->hasMany(Event::class, 'user_id');
    }
}
