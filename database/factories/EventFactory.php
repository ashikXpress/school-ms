<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Event;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(7),
        'description'=>$faker->realText(),
        'location'=>$faker->address,
        'start_time'=>Carbon::now()->format('H:i'),
        'end_time'=>Carbon::now()->format('H:i'),
        'date'=>Carbon::now()->format('d-m-Y'),
        'photo'=>$faker->image('public/uploads/gallery',400,300, null, false),

        ];
});
