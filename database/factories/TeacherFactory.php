<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(
    Teacher::class,
    function (Faker $faker) {
        return [
            'name' => $faker->name,
            'type' => 'teacher',
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => $faker->sha256,
            'remember_token' => Str::random(10),
        ];
    }
);
