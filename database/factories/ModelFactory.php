<?php
$factory->define(App\User::class, function(Faker\Generoator $faker) {
  static $password;

  return [
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'password' => $password ?: $password = bcrypt('secret'),
    'remember_token' => str_random(10),
  ];
});

$factory->define(App\Person::class,
function (Faker\Generator $faker) {
  return [
    'name' => $faker->name,
    'mail' => $faker->safeEmail,
    'age' => random_int(1,99),
  ];
});