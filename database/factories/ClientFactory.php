<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nom_client' => $faker->lastName,
        'prenom_client' => $faker->firstName,
        'adresse_client' => $faker->address,
        'email_client' => $faker->freeEmail,
        'mdp_client' => $faker->sentence,
        'telephone_client' => $faker->e164PhoneNumber,
        'created_at' => now()

    ];
});
