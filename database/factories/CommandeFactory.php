<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Commande;
use App\Client;
use Faker\Generator as Faker;

$factory->define(Commande::class, function (Faker $faker) {
    return [
        'Date_commande' => $faker->date,
        'client_id' => Client::get('id')->random(),
        'created_at' => now()
    ];
});
