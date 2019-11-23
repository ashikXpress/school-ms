<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\ExaminationTerm;
use Faker\Generator as Faker;

$factory->define(ExaminationTerm::class, function (Faker $faker) {
    return [
        'exam_term_name'=>$faker->randomElement(['First term','Second term','Third term','Final term'])
    ];
});
