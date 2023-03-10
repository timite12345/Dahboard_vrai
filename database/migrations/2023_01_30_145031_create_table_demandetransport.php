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
        Schema::create('demandetransport', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("refEtb");
            $table->string("condTransp");
            $table->date("date_Dep");
            $table->string("adresse_Dep");
            $table->string("adresse_Arriv");
            $table->boolean("estUrgent")->default(false);
            $table->boolean("estTraite")->default(false);
            $table->boolean("estFacturĂ©")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_demandetransport');
    }
};
