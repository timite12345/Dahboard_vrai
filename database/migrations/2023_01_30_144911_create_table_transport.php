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
        Schema::create('table_transport', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("idTransport");
            $table->date("heureDeb");
            $table->date("heureFin");
            $table->string("commentaire");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_transport');
    }
};
