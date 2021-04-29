<?php

use App\Admin_type;
use Illuminate\Database\Seeder;

class Admin_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin_type::class,5)->create();     
    }
}

