<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        // $this->call(UsersTableSeeder::class);

        $this->call(ClientesTableSeeder::class);
        $this->call(CommandesTableSeeder::class);

        $this->call(ProduitsTableSeeder::class);
        $this->call(PaniersTableSeeder::class);

         $this->call(Admin_typesTableSeeder::class);
         $this->call(AdminusersTableSeeder::class);
    }
}
