<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create("Train", function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("Azienda",30);
            $table->string("Stazione_di_Partenza",40);
            $table->string("Stazione_di_Arrivo",40);
            $table->string("Orario_di_Partenza",40);
            $table->string("Orario_di_Arrivo",40);
            $table->string("Codice_Treno",40);
            $table->string("Numero_Carrozze",10);
            $table->boolean("In_orario");
            $table->boolean("Cancellato");
            $table->string("updated_at");
            $table->string("created_at");
        });
}

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        //

    }
};
