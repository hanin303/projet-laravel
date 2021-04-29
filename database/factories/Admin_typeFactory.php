<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin_type;
use Faker\Generator as Faker;

$factory->define(Admin_type::class, function (Faker $faker) {
    return [
        'admin_type' => $faker-> word,
        'permissions' => $faker-> word,
        'created_at' => now()

    ];
});
