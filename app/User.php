<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Parental\HasChildren;

class User extends Authenticatable
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
        'student' => Student::class,
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
