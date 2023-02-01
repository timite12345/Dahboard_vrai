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
        Schema::create('table_etbsante', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("refEtb");
            $table->string("nom");
            $table->string("adresseEtb");
            $table->string("email");
            $table->integer("tel");
            $table->boolean("estValide")->default(false);





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_etbsante');
    }
};
