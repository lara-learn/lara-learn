<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Parental\HasChildren;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, HasChildren;

    protected $fillable = [
        'name',
        'type',
        'email',
        'password',
    ];

    protected $childTypes = [
        'teacher' => Teacher::class,
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
