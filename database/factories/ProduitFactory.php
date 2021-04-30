<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use App\Commande;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [

        'nom_produit'=>$faker->word,
        'stock_produits' =>$faker->randomDigit,
        'prix' =>$faker->randomFloat(3,0,999999),
        'created_at' => now()
    ];
});
