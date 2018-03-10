<?php

use Faker\Generator as Faker;


$factory->define(App\Modul::class, function (Faker $faker) {
    return [
        'mod_id' => 'MOD'.$faker->numberBetween(1,100),
        'nama' => $faker->name,
        'jumlah' => $faker->randomDigit,
        'keterangan' => 'jomblo',


    ];
});
