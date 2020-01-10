<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'role' => $faker->randomElement(['super_admin','admin','teacher','staff']),
        'email' => $faker->unique()->safeEmail,
        'photo'=>'gallery/'.$faker->image('public/uploads/gallery',150,150, null, false),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),


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

    ];
});
