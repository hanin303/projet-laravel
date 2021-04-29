<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Produit;
use App\Commande;
use App\Panier;
use Faker\Generator as Faker;

$factory->define(Panier::class, function (Faker $faker) {
    return [
        'Quantite'=>$faker->randomDigit,
        'produit_id' =>Produit::get('id')->random(),
        'commande_id' =>Commande::get('id')->random(),
        'created_at' => now()
    ];
});
