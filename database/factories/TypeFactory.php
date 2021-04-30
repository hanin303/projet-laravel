<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Type;
use Faker\Generator as Faker;

$factory->define(Type::class, function (Faker $faker) {
    return [
        'admin_type' => $faker-> word,
        'permissions' => $faker-> word,
        'created_at' => now()
    ];
});