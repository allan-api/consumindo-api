<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        // 'nome'      => $faker->firstname,
        // 'sobrenome' => $faker->lastName,
        // 'email'     => $faker->unique()->safeEmail,
        // 'nascimento'=> $faker->date(),
        // 'telefone3' => $faker->phoneNumber,
        // 'cep'       => $faker->$faker->randomElement(['04821010', '04821000', '04910234']),
        // 'rua'       => $faker->text,
        

    ];
});
