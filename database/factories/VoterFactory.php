<?php

use Faker\Generator as Faker;

$factory->define(App\Voter::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'zone' => $faker->numberBetween(1,7),
        'precint_number' => $faker->bothify('CAL-####-??##'),
    ]; 
});
