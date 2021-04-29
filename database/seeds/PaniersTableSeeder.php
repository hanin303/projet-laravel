<?php
use App\Panier;
use Illuminate\Database\Seeder;

class PaniersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Panier::class,50)->create();
    }
}
