<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use App\Models\ClassName;
use Faker\Generator as Faker;

$factory->define(ClassName::class, function (Faker $faker) {
    return [
        'class_name'=>$faker->randomElement(['Play', 'Baby','One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten'])
    ];
});
