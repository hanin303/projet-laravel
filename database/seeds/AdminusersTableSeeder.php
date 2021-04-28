<?php

use App\Adminuser;
use Illuminate\Database\Seeder;

class AdminusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Adminuser::class,3)->create();     
    }
}
