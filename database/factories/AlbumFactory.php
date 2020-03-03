<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use App\User;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    
    return [
        'nom' => $faker->name,
        'description' => $faker->text,
        'id_user' => User::inRandomOrder()->first()->id
    ];
});
