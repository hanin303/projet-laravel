<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use App\Type;
use Faker\Generator as Faker;
/* qqq  */
$factory->define(Admin::class, function (Faker $faker) {
    return [
        'user_name' => $faker-> word,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'password' => $faker-> sentence,
        'type_id'=> Type::get('id')->random(),
        'created_at' => now()
    ];
});
