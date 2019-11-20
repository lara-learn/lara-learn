<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use App\Teacher;
use Faker\Generator as Faker;

$factory->define(
    Course::class,
    function (Faker $faker) {
        return [
            'name' => $faker->sentence,
            'teacher_id' => factory(Teacher::class)->create()->id,
        ];
    }
);
