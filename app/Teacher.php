<?php

declare(strict_types=1);

namespace App;

use Parental\HasParent;

class Teacher extends User
{
    use HasParent;

    public function courses()
    {
        return $this->hasMany(Course::class, 'teacher_id');
    }
}
