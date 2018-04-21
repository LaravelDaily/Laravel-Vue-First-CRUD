<?php

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'website' => $faker->url,
        'email' => $faker->email,
    ];
});
