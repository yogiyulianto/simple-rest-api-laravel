<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'university' => $faker->city,
        'faculty' => $faker->citySuffix,
        'major'=> $faker->streetName,
        'class'=> $faker->randomDigit,
        'phone'=> $faker->randomNumber($nbDigits = NULL, $strict = false)
    ];
});
