<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Detail;
use App\Produit;
use App\Commande;
use Faker\Generator as Faker;

$factory->define(Detail::class, function (Faker $faker) {
    return [
        'Quantite'=>$faker->randomDigit,
        'produit_id' =>Produit::get('id')->random(),
        'commande_id' =>Commande::get('id')->random(),
        'created_at' => now()
    ];
});
