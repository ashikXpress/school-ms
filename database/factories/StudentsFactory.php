<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models;
use Faker\Generator as Faker;

$factory->define(Models\Student::class, function (Faker $faker) {
    return [
             'first_name' => $faker->firstName,
             'last_name' => $faker->lastName,
             'gender_name' => $faker->boolean,
             'blood_group' => $faker->randomElement(['A+','B+','O+','AB+']),
             'date_of_birth' => $faker->date('d-m-y'),
             'permanent_address' => $faker->address,
             'present_address' => $faker->address,
             'contact_number' => $faker->phoneNumber,
             'contact_number2' => $faker->phoneNumber,

             'class' =>$faker->randomElement(['Play', 'Baby','One','Two','Three','Four','Five','Six','Seven','Eight']),
             'section' =>$faker->randomElement(['A', 'B']),
             'shift' =>$faker->randomElement(['Morning', 'Day']),
             'roll' => $faker->randomNumber(),
             'reg' => $faker->randomNumber(),
             'id_number' =>'tgl-'. $faker->numberBetween(1,400),
             'birth_certificate_number' => $faker->randomNumber(),
             'previous_institute_name' => 'Ideal Model High School, Dhaka',
             'admission_date' => $faker->date('d-m-y'),
             'admission_fees' => $faker->randomFloat(9,2),
             'transport' => $faker->boolean,

             'father_name' => $faker->name,
             'father_contact_number' => $faker->phoneNumber,
             'father_occupation' => $faker->jobTitle,
             'mother_name' => $faker->name,
             'mother_contact_number' => $faker->phoneNumber,
            'mother_occupation' => $faker->jobTitle,
             'local_guardian_name' => $faker->name,

             'photo' =>'https://source.unsplash.com/random',
            'email' => $faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

    ];

});
