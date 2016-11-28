<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Patients\Patient::class, function (Faker\Generator $faker) {

    return [
        'ccc_number' => $faker->unique()->Text,
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'other_name' => $faker->name,
        'phone_number' => $faker->unique()->number,
        'alternate_number' => $faker->unique()->number,
        'physical_address' => $faker->text,
        'gender' => 'Female'
        'birth_date' => $faker->date,
        'enrollment_date' => $faker->date,
        'support_group' => $faker->text,
        'is_pregnant' => '0',
        'is_tb' => '0',
        'is_tb_tested' => '0' ,
        'is_smoke' => '0',
        'is_alchohol' => '0',
        'is_sms' => '1'
    ];
});

