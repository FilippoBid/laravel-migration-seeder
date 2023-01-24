<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id("id");
            $table->string("compagnia");
            $table->string("codice_treno");
            $table->string("numero_carrozze");
            $table->boolean("in_orario");
            $table->boolean("cancellato");
            $table->string("stazione_partenza");
            $table->string("stazione_arrivo");
            $table->string("arrivo_treno");
            $table->string("partenza_treno");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
