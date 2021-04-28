
<?php 
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Admin_type;
use App\Adminuser;
use Faker\Generator as Faker;

$factory->define(Adminuser::class, function (Faker $faker) {
    return [
        'user_name' => $faker-> word,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'password' => $faker-> sentence,
        'type_id'=> Admin_type::get('id')->random(),
        'created_at' => now()
    ];
});
