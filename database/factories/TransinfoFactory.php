<?php

namespace Database\Factories;

use App\Transinfo;
use Illuminate\Database\Eloquent\Factories\Factory;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Generator as Faker;

$factory->define(App\transinfo::class, function (Faker $faker) {
    return [
        'nationalId' => $faker->randomNumber(),
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'phoneNUMBER' => $faker->phoneNumber,
        'address' => $faker->address,
        'BirthDate' => $faker->date(),


    ];
});
