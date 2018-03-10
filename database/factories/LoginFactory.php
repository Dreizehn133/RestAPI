<?php

use Faker\Generator as Faker;


$factory->define(App\Login::class, function (Faker $faker) {

    return [
        'nama' => $faker->name,
        'username' => $faker->userName,
        'password' => $faker->password,
        'telp' => $faker->phoneNumber,
        'status' => $faker->name,
    ];
});
