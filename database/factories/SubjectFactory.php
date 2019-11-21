<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use App\Models\Subject;
use Faker\Generator as Faker;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'subject_name' => $faker->randomElement(['Banla','Bangla-1','Bangla-2','English','English-1','English-2','Math','Science','Islamic studies','History','Geography','Biology']),

    ];
});
