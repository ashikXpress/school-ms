<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Models\Student::class, function (Faker $faker) {
    return [
             'first_name' => $faker->name,
             'last_name' => $faker->name,
             'gender_name' => $faker->boolean,
             'date_of_birth' => $faker->date('d-m-y'),
             'present_address' => $faker->address,
             'contact_number' => $faker->phoneNumber,

             'class' => $faker->name,
             'roll' => $faker->numberBetween(1,200),
             'reg' => $faker->unique()->randomNumber(),
             'id_number' => $faker->unique()->randomNumber(),
             'birth_certificate_number' => $faker->randomNumber(),
             'admission_date' => $faker->date('d-m-y'),
             'admission_fees' => $faker->randomFloat(9,2),

             'father_name' => $faker->name,
             'father_contact_number' => $faker->phoneNumber,
             'father_occupation' => $faker->jobTitle,
             'mother_name' => $faker->name,

             'photo' => $faker->image('public/uploads/',400,300),
             'email' => $faker->unique()->safeEmail,
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

         ];

});
