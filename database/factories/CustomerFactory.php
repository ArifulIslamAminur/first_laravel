<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Company;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName.' '.$faker->lastName,
        'email' => $faker->safeEmail,
        'company_id' => Company::all()->random(),
        'active' => $faker->randomElement([0,1]),
    ];
});
