<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produit_id')->unsigned();
           //$table->integer('commande_id')->unsigned();
            $table->integer('Quantite');
            $table->timestamps();
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict');
          //$table->foreign('commande_id')->references('id')->on('commandes')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
