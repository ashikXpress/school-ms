<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Employee::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'user_type' => $faker->randomElement(['superadmin','admin','teacher','staff']),
        'gender_name' => $faker->boolean,
        'blood_group' => $faker->randomElement(['A+','B+','O+','AB+']),
        'date_of_birth' => $faker->date('d-m-y'),
        'marital_status' => $faker->boolean,
        'permanent_address' => $faker->address,
        'present_address' => $faker->address,
        'contact_number' => $faker->phoneNumber,
        'contact_number2' => $faker->phoneNumber,

        'designation' => $faker->randomElement(['Head master','Teacher','Peon']),
        'nid' => $faker->randomNumber(),
        'education_qualification' => $faker->text(),
        'joining_date' => $faker->date(),
        'basic_salary' => $faker->randomFloat(9,2),
        'others_honorarium' => $faker->randomFloat(9,2),
        'subject_speciality' => $faker->randomElement(['Bangla','English','Maths']),

        'father_name' => $faker->name,
        'mother_name' => $faker->name,
        'emergency_number' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'photo' => 'https://source.unsplash.com/random',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password



    ];
});
