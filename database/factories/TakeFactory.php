<?php

use Faker\Generator as Faker;

$factory->define(App\Take::class, function (Faker $faker) {
  $login = App\Login::pluck('id_usr')->toArray();
  $modul = App\Modul::pluck('mod_id')->toArray();
  return [
      'id_user' => $faker->randomElement($login),
      'mod_id' => $faker->randomElement($modul),
      'jumlah' => $faker->randomDigit,
      'keterangan' => 'solo player',
  ];
});
